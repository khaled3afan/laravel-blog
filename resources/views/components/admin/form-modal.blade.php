<div>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
        Create Article <i class="fas fa-plus" aria-hidden="true"></i>
    </button>

    <!-- Modal -->
    <div class="modal fade " id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
        aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog modal-fullscreen">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="staticBackdropLabel">
                        {{ $title }}
                    </h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form class="row g-3 needs-validation form-floating" id="form" action="{{ route('admin.articles.store') }}" method="POST" novalidate>
                        @method('post')
                        @csrf
                        <div class="form-floating">
                            <input type="text" class="form-control" id="floatingInputInvalid" placeholder="{{ __('Article Title') }}" name="title">
                            <label for="floatingInputInvalid">{{ __('Article Title') }}</label>
                        </div>

                        <div class="form-floating">
                            <input type="url" class="form-control" id="floatingInputInvalid" placeholder="{{ __('Image Url') }}" name="image_url">
                            <label for="floatingInputInvalid">{{ __('Image Url') }}</label>
                        </div>

                        <div class="form-floating">
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea" style="height: 100px" name="content"></textarea>
                            {{-- <label for="floatingTextarea">Content</label> --}}
                        </div>
{{--
                        <div class="col-md-3">
                            <label for="validationCustom04" class="form-label">Category</label>
                            <select class="form-select" id="validationCustom04" required>
                            <option selected disabled value="">Choose...</option>
                            <option>...</option>
                            </select>
                            <div class="invalid-feedback">
                            Please select a valid state.
                            </div>
                        </div> --}}


                    </form>
                </div>
                <div class="modal-footer flex-row-reverse">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary submit-form">Understood</button>
                </div>
            </div>
        </div>
    </div>

</div>
<script>
    $(document).ready(function () {
        $('.submit-form').click(function(){
            $('#form').submit();
        })
        const easyMDE = new EasyMDE();
easyMDE.codemirror.setOption('direction', 'rtl');

    });
</script>
