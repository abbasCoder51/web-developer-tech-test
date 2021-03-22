@csrf
<div class="form-group">
    <div class="row">
        <div class="col-md-4">
            <label for="title">Title</label>
            <input type="text" id="title" name="title" class="form-control"
                   value="{{ old('title', isset($section) ? $section->title : '') }}">
        </div>
        <div class="col-md-4">
            <label for="slug">Slug</label>
            <input type="text" id="slug" name="slug" class="form-control"
                   value="{{ old('slug', isset($section) ? $section->slug : '') }}" required>
        </div>
        <div class="col-md-4">
            <label for="url_link">URL Link</label>
            <input type="text" id="url_link" name="url_link" class="form-control"
                   value="{{ old('url_link', isset($section) ? $section->url_link : '') }}">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-12">
            <label for="description">Description</label>
            <textarea name="description"
                      id="description"
                      class="form-control"
                      cols="30"
                      rows="10"
                      >{{ old('description', isset($section) ? $section->description : '') }}</textarea>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>