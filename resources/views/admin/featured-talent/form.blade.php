@csrf
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control"
                   value="{{ old('name', isset($featuredTalent) ? $featuredTalent->name : '') }}" required>
        </div>
        <div class="col-md-3">
            <label for="location">Location</label>
            <input type="text" id="location" name="location" class="form-control"
                   value="{{ old('location', isset($featuredTalent) ? $featuredTalent->location : '') }}" required>
        </div>
        <div class="col-md-3">
            <label for="job_category">Job Category</label>
            <input type="text" id="job_category" name="job_category" class="form-control"
                   value="{{ old('job_category', isset($featuredTalent) ? $featuredTalent->job_category : '') }}" required>
        </div>
        <div class="col-md-3">
            <label for="url_link">Url Link</label>
            <input type="text" id="url_link" name="url_link" class="form-control"
                   value="{{ old('url_link', isset($featuredTalent) ? $featuredTalent->url_link : '') }}" required>
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
                      required >{{ old('description', isset($featuredTalent) ? $featuredTalent->description : '') }}</textarea>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-md-3">
            <label for="image">Image</label>
            <input type="file" id="image" name="image" class="form-control"
                   value="{{ old('image', isset($featuredTalent) ? $featuredTalent->image : '') }}">
            @if(isset($featuredTalent) && $featuredTalent->image)
                <p class="small mt-2"><strong>File Name:</strong> {{ $featuredTalent->image }}</p>
            @endif
        </div>
        <div class="col-md-3">
            <label for="employment_type">Employment Type</label>
            <input type="text" id="employment_type" name="employment_type" class="form-control"
                   value="{{ old('employment_type', isset($featuredTalent) ? $featuredTalent->employment_type : '') }}" required>
        </div>
        <div class="col-md-3">
            <label for="skill">Skill</label>
            <input type="text" id="skill" name="skill" class="form-control"
                   value="{{ old('skill', isset($featuredTalent) ? $featuredTalent->skill : '') }}" required>
        </div>
        <div class="col-md-3">
            <label for="years_experience">Years Experience</label>
            <input type="text" id="years_experience" name="years_experience" class="form-control"
                   value="{{ old('years_experience', isset($featuredTalent) ? $featuredTalent->years_experience : '') }}" required>
        </div>
    </div>
</div>
<button type="submit" class="btn btn-primary">Submit</button>