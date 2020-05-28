@extends('create')
@section('content')
    <form action="/experience">
        <div class="form-row">
            <div class="form-grou col-md-6">
                <label for="level">Highest degree reached</label>
                <input type="text" class="form-control" id="level" placeholder="Masters degree" required>
            </div>
        </div>
        <div class="school">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>School</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="school_name">Name</label>
                    <input type="text" class="form-control" id="school_name" placeholder="Comenius university" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="school_city">City</label>
                    <input type="text" class="form-control" id="school_city" placeholder="1234 Main St" required>
                </div>
            </div>
            <div class="form-group">
                <label for="school_fieldofstudy">Field of study</label>
                <input type="text" class="form-control" id="school_fieldofstudy" placeholder="Applied informatics" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="school_entry">Entry year</label>
                    <input type="date" class="form-control" id="school_entry" placeholder="19.12.1995" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="school_finishing">Finishing year</label>
                    <input type="date" class="form-control" id="school_finishing" placeholder="19.12.1995" required>
                </div>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-3">
                <button class="btn btn-secondary w-100" id='add_school'>Add another</button>
            </div>
        </div>
        <div class="course">
            <div class="form-row">
                <div class="form-group col-md-12">
                    <label>Course</label>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="course_name">Name</label>
                    <input type="text" class="form-control" id="school_name" placeholder="My awesome course" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="course_institution">Institution</label>
                    <input type="text" class="form-control" id="course_institution" placeholder="Coursera" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="course_from">From</label>
                    <input type="date" class="form-control" id="course_from" placeholder="19.12.1995" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="course_to">To</label>
                    <input type="date" class="form-control" id="course_to" placeholder="19.12.1995" required>
                </div>
            </div>
        </div>
        <div class="form-row justify-content-between">
            <div class="form-group col-md-3">
                <button class="btn btn-secondary w-100" id="add_course">Add another</button>
            </div>
            <div class="form-group col-md-3 ml-6">
                <button type="submit" class="btn btn-primary w-100">Next step</button>
            </div>
        </div>
    </form>
@endsection
