@extends('create')
@section('content')
    <div class="container">
        <form action="/personal/nextStep" >
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="male_gender" value="male" required>
                <label class="form-check-label" for="male_gender">Male</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="gender" id="female_gender" value="female" required>
                <label class="form-check-label" for="female_gender">Female</label>
            </div>
            <div class="form-row">
                <div class="form-grou col-md-6">
                    <label for="degree">Degree</label>
                    <input type="text" class="form-control" id="degree" name="degree" placeholder="Ing." required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="first_name" placeholder="First name" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="surname">Surname</label>
                    <input type="text" class="form-control" id="surname" name="last_name" placeholder="Surname" required>
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="example@gmail.com" required>
                </div>
                <div class="form-group col-md-6">
                    <label for="birth_date">Date of birth</label>
                    <input type="date" class="form-control" id="date_of_birth" name="date_of_birth" placeholder="19.2.1978" required>
                </div>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="1234 Main St" required>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="city">City</label>
                    <input type="text" class="form-control" id="city" name="city" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state" required>
                </div>
                <div class="form-group col-md-2">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" required>
                </div>
            </div>
            <div class="form-group">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="agreement" name="agreement" required>
                    <label class="form-check-label" for="agreement">
                        Agree with use of personal information
                    </label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Next step</button>
        </form>
    </div>
    @endsection
