<div>

    <div class="container-fluid mt-5">
        <div class="card">
            <div class="row">
                <h3 class="col-9 m-3">Messages</h3>
            </div>
            <div class="card-body">
                <div class="mb-3 row">
                    <div class="col-md-6">
                    <input wire:model.live='search' type="text" id="searchInput" class="form-control" placeholder="Search...">
                    </div>
                    <div class="col-md-3">
                        <select wire:model.live="type" class="form-select" aria-label="Default select example">
                            <option value="all">All</option>
                            <option value="read">Read</option>
                            <option value="unread">Unread</option>
                        </select>
                    </div>
                    <div class="col-md-3">
                        <select wire:model.live="order" class="form-select" aria-label="Default select example">
                            <option value="desc">Descending</option>
                            <option value="asc">Ascending</option>
                        </select>
                    </div>
                </div>
                <table class="table text-wrap table-responsive">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Subject</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody id="messagesTable">
                        @foreach($messages as $message)
                            <tr>
                                <td>{{ $message->name }}</td>
                                <td>{{ $message->email }}</td>
                                <td>{{ $message->subject }}</td>
                                <td>
                                    @if($message->is_read)
                                        <span class="text-success">Read</span>
                                    @else
                                        <span class="text-warning">Unread</span>
                                    @endif
                                </td>
                                <td>
                                    <a href="#" class="btn btn-primary"
                                       onclick="viewMessage('{{$message->id}}', `{{ str_replace('`', '\\`', $message->name) }}`, `{{ str_replace('`', '\\`', $message->email) }}`, `{{ str_replace('`', '\\`', $message->subject) }}`, `{{ str_replace('`', '\\`', $message->message) }}`)"
                                       data-bs-toggle="modal" data-bs-target="#viewMessageModal"
                                    >View</a>
                                     <a href="{{ route('message.toggle', $message->id) }}" class="btn btn-{{ $message->is_read ? 'warning' : 'success' }}">
                                    {{ $message->is_read ? 'Mark Unread' : 'Mark Read' }}
                                </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
            <div class="d-flex justify-content-center">
                {{ $messages->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>

    <div class="modal fade" id="viewMessageModal" tabindex="-1" aria-labelledby="viewMessageModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="viewMessageModalLabel">View Message</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                     <p><strong>Name:</strong> <span id="view_name"></span></p>
                    <p><strong>Email:</strong> <span id="view_email"></span></p>
                    <p><strong>Subject:</strong> <span id="view_subject"></span></p>
                    <p><strong>Message:</strong> <span id="view_message"></span></p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>




</div>
