@if(session('success'))
    <div class="toast-container position-fixed top-0 end-0 p-3">
        <div class="toast show align-items-center text-white bg-success border-0"
             role="alert" aria-live="assertive" aria-atomic="true">
            <div class="d-flex">
                <div class="toast-body">
                    {{ session('success') }}
                </div>
                <button type="button" class="btn-close btn-close-white me-2 m-auto"
                        data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
        </div>
    </div>
@endif
