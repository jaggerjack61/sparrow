@extends('layouts.base')

@section('content')
    <div class="container-fluid mt-5">
        <div class="card">
            <div class="row">
                <h3 class="col-9 m-3">FAQs</h3>
                <div class="col-2 m-3">
                    <a href="#" class="btn btn-primary"
                       data-bs-toggle="modal" data-bs-target="#addFaqModal"
                    >Add FAQ</a>
                </div>
            </div>
            <div class="card-body">
                <div class="mb-3">
                    <input type="text" id="searchInput" class="form-control" placeholder="Search...">
                </div>
                <table class="table text-wrap table-responsive">
                    <thead>
                    <tr>
                        <th>Question</th>
                        <th>Answer</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr>
                    </thead>
                    <tbody id="faqsTable">
                    @foreach($faqs as $faq)
                        <tr>
                            <td>{{$faq->question}}</td>
                            <td>{{$faq->answer}}</td>
                            <td>@if($faq->status)
                                    <span class="text-success">Active</span>
                                @else
                                    <span class="text-danger">Inactive</span>
                                @endif
                            </td>
                            <td>
                                <a href="#" class="btn btn-primary"
                                   onclick="editFaq('{{$faq->id}}', `{{ str_replace('`', '\\`', $faq->question) }}`, `{{ str_replace('`', '\\`', $faq->answer) }}`)"
                                   data-bs-toggle="modal" data-bs-target="#editFaqModal"
                                >Edit</a>
                                <a href="{{ route('faq.toggle', $faq->id) }}" class="btn btn-{{ $faq->status ? 'danger' : 'success' }}">
                                    {{ $faq->status ? 'Deactivate' : 'Activate' }}
                                </a>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="modal fade" id="addFaqModal" tabindex="-1" aria-labelledby="addFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="addFaqModalLabel">Add FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="addFaqForm"
                          action="{{route('faq.store')}}"
                          method="POST"
                    >
                        @csrf
                        <div class="mb-3">
                            <label for="question" class="form-label">Question</label>
                            <textarea class="form-control" id="question" name="question" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="answer" class="form-label">Answer</label>
                            <textarea class="form-control" id="answer" name="answer" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="editFaqModal" tabindex="-1" aria-labelledby="editFaqModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editFaqModalLabel">Edit FAQ</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editFaqForm"
                          action="{{route('faq.update')}}"
                          method="POST"
                    >
                        @csrf
                        <input type="hidden" name="id" id="edit_id">
                        <div class="mb-3">
                            <label for="edit_question" class="form-label">Question</label>
                            <textarea class="form-control" id="edit_question" name="question" rows="3" required></textarea>
                        </div>
                        <div class="mb-3">
                            <label for="edit_answer" class="form-label">Answer</label>
                             <textarea class="form-control" id="edit_answer" name="answer" rows="3" required></textarea>
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
            var tableRows = document.querySelectorAll('#faqsTable tr');
            tableRows.forEach(function(row) {
                var rowText = row.textContent.toLowerCase();
                if (rowText.indexOf(searchQuery) !== -1) {
                    row.style.display = '';
                } else {
                    row.style.display = 'none';
                }
            });
        });

         function editFaq(id, question, answer) {
            document.getElementById('edit_id').value = id;
             document.getElementById('edit_question').value = question.replace(/\\`/g, '`');
            document.getElementById('edit_answer').value = answer.replace(/\\`/g, '`');
        }
    </script>
@endsection
