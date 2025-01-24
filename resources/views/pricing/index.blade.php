@extends('layouts.base')

@section('content')
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="row">
                <h3 class="col-9 m-3">Pricings</h3>
                <div class="col-2 m-3">
                    <a href="#" class="btn btn-primary"
                       data-bs-toggle="modal" data-bs-target="#addPricingModal"
                    >Add Pricing</a>
                </div>
            </div>
            <div class="card-body">
                 <div class="mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                </div>
                <table class="table table-striped text-wrap table-responsive">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Price</th>
                         <th>Period</th>
                         <th>Selected</th>
                        <th>Status</th>
                        <th>Actions</th>
                         <th>Items</th>
                    </tr>
                    </thead>
                    <tbody id="pricingsTable">
                    @foreach($pricings as $pricing)
                        <tr>
                            <td>{{ $pricing->name }}</td>
                            <td>{{ $pricing->description }}</td>
                            <td>{{ $pricing->price }}</td>
                            <td>{{ $pricing->period }}</td>
                            <td>
                                @if($pricing->selected)
                                    <span class="text-success">Selected</span>
                                @else
                                    <span class="text-muted">Not Selected</span>
                                @endif
                            </td>
                            <td>
                                @if($pricing->status)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Inactive</span>
                                @endif
                            </td>

                            <td>
                                <div class="d-flex flex-column">
                                    <a href="#" class="btn btn-primary mb-1"
                                       onclick="editPricing('{{$pricing->id}}', `{{ str_replace('`', '\\`', $pricing->name) }}`, `{{ str_replace('`', '\\`', $pricing->description) }}`, '{{$pricing->price}}', '{{$pricing->period}}')"
                                       data-bs-toggle="modal" data-bs-target="#editPricingModal"
                                    >Edit</a>
                                    <a href="{{ route('pricing.toggle', $pricing->id) }}" class="btn btn-{{ $pricing->status ? 'danger' : 'success' }} mb-1">
                                        {{ $pricing->status ? 'Deactivate' : 'Activate' }}
                                    </a>
                                    @if(!$pricing->selected)
                                     <a href="{{ route('pricing.select', $pricing->id) }}" class="btn btn-primary">
                                      Select
                                     </a>
                                    @endif
                                </div>
                            </td>
                            <td>
                                    <a href="#" class="m-1 btn btn-sm btn-primary" data-bs-toggle="modal"
                                       data-bs-target="#addPricingItemModal{{ $pricing->id }}">Add Item</a>
                                    <ul>
                                        <table class="table table-bordered table-dark">
                                            <tbody>
                                        @foreach($pricing->items as $item)
                                        <tr>
                                            <td>
                                                {{ $item->description }}</td><td>
                                                 <a href="#" class="btn btn-sm btn-primary"
                                                      onclick="editPricingItem('{{$item->id}}', `{{ str_replace('`', '\\`', $item->description) }}`)"
                                                       data-bs-toggle="modal" data-bs-target="#editPricingItemModal{{ $pricing->id }}">Edit</a>
                                                        <a href="{{ route('pricing.item.delete', $item->id) }}" class="btn btn-sm btn-danger">Delete</a>
                                            </td>
                                            <div class="modal fade" id="editPricingItemModal{{ $pricing->id }}" tabindex="-1" aria-labelledby="editPricingItemModalLabel{{ $pricing->id }}"
                                               aria-hidden="true">
                                                <div class="modal-dialog">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="editPricingItemModalLabel{{ $pricing->id }}">Edit Item</h5>
                                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                        </div>
                                                        <div class="modal-body">
                                                            <form id="editPricingItemForm{{ $pricing->id }}" action="{{ route('pricing.item.update', $item->id) }}" method="POST">
                                                                 @csrf
                                                                <input type="hidden" name="id" id="edit_item_id">
                                                                <div class="mb-3">
                                                                    <label for="edit_item_description{{ $pricing->id }}" class="form-label">Description</label>
                                                                    <textarea class="form-control" id="edit_item_description{{ $pricing->id }}" name="description"
                                                                              rows="3" required></textarea>
                                                                </div>
                                                                <button type="submit" class="btn btn-primary">Submit</button>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </tr>
                                        @endforeach

                                </tbody>
                            </table>
                                    </ul>
                                    <div class="modal fade" id="addPricingItemModal{{ $pricing->id }}" tabindex="-1" aria-labelledby="addPricingItemModalLabel{{ $pricing->id }}"
                                         aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="addPricingItemModalLabel{{ $pricing->id }}">Add Item</h5>
                                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                </div>
                                                <div class="modal-body">
                                                    <form id="addPricingItemForm{{ $pricing->id }}" action="{{ route('pricing.item.store', $pricing->id) }}" method="POST">
                                                        @csrf
                                                        <div class="mb-3">
                                                            <label for="description" class="form-label">Description</label>
                                                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                                        </div>
                                                        <button type="submit" class="btn btn-primary">Submit</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Add Pricing Modal -->
    <div class="modal fade" id="addPricingModal" tabindex="-1" aria-labelledby="addPricingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addPricingModalLabel">Add Pricing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addPricingForm" action="{{ route('pricing.store') }}" method="POST">
                        @csrf
                         <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="price" class="form-label">Price</label>
                            <input type="number" step="0.01" class="form-control" id="price" name="price" required>
                        </div>
                          <div class="mb-3">
                                <label for="period" class="form-label">Period</label>
                                <select class="form-select" id="period" name="period" required>
                                    <option value="day">Day</option>
                                    <option value="week">Week</option>
                                    <option value="month">Month</option>
                                    <option value="year">Year</option>
                                </select>
                           </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Pricing Modal -->
    <div class="modal fade" id="editPricingModal" tabindex="-1" aria-labelledby="editPricingModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editPricingModalLabel">Edit Pricing</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editPricingForm" action="{{ route('pricing.update') }}" method="POST">
                        @csrf
                         <input type="hidden" name="id" id="edit_id">
                        <div class="mb-3">
                            <label for="edit_name" class="form-label">Name</label>
                            <input type="text" class="form-control" id="edit_name" name="name" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_description" class="form-label">Description</label>
                            <textarea class="form-control" id="edit_description" name="description" rows="3" required></textarea>
                        </div>
                         <div class="mb-3">
                            <label for="edit_price" class="form-label">Price</label>
                            <input type="number" step="0.01" class="form-control" id="edit_price" name="price" required>
                        </div>
                        <div class="mb-3">
                            <label for="edit_period" class="form-label">Period</label>
                             <select class="form-select" id="edit_period" name="period" required>
                                    <option value="day">Day</option>
                                    <option value="week">Week</option>
                                    <option value="month">Month</option>
                                    <option value="year">Year</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

     <script>
          document.getElementById('searchInput').addEventListener('keyup', function() {
            var searchQuery = this.value.toLowerCase();
            var tableRows = document.querySelectorAll('#pricingsTable tr');
            tableRows.forEach(function(row) {
                var rowText = row.textContent.toLowerCase();
                if (rowText.indexOf(searchQuery) !== -1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });


        function editPricing(id, name, description, price, period) {
            document.getElementById('edit_id').value = id;
             document.getElementById('edit_name').value = name.replace(/\\`/g, '`');
              document.getElementById('edit_description').value = description.replace(/\\`/g, '`');
             document.getElementById('edit_price').value = price;
            document.getElementById('edit_period').value = period;
        }

         function editPricingItem(id, description) {
               document.getElementById('edit_item_id').value = id;
               document.querySelector(`#edit_item_description${id ? id.split('_')[0] : ''}`).value = description.replace(/\\`/g, '`');
        }
    </script>
@endsection
