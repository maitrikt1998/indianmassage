@extends('layouts.app')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Attractive Bootstrap Form with Validation</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .card {
            border-radius: 15px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
        }
        .card-header {
            background-color: #007bff;
            color: #fff;
            border-bottom: 1px solid #007bff;
            border-radius: 15px 15px 0 0;
        }
        .btn-custom {
            background-color: #007bff;
            color: #fff;
        }
        .btn-custom:hover {
            background-color: #0056b3;
        }
        .form-control-file {
            border-radius: 0.25rem;
        }
        .form-control {
            border-radius: 0.25rem;
        }
        .select2-container--default .select2-selection--multiple {
            border-radius: 0.25rem;
        }
        .error {
            color: #dc3545;
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="card">
            <div class="card-header">
                <h2>Clinic Registration Form</h2>
            </div>
            <div class="card-body">
                <form id="clinicForm">
                    <div class="form-group">
                        <label for="fullName">Full Name</label>
                        <input type="text" class="form-control" id="fullName" name="fullName" placeholder="Enter your full name" required>
                    </div>
                    <div class="form-group">
                        <label for="clinicAddress">Clinic Address</label>
                        <input type="text" class="form-control" id="clinicAddress" name="clinicAddress" placeholder="Enter clinic address" required>
                    </div>
                    <div class="form-group">
                        <label for="contactNumber">Contact Number</label>
                        <input type="tel" class="form-control" id="contactNumber" name="contactNumber" placeholder="Enter contact number" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Enter email address" required>
                    </div>
                    <div class="form-group">
                        <label for="websiteLink">Website Link</label>
                        <input type="url" class="form-control" id="websiteLink" name="websiteLink">
                    </div>
                    <div class="form-group">
                        <label for="previousTraining">Previous Training/Certificates</label>
                        <input type="file" class="form-control-file" id="previousTraining" name="previousTraining[]" multiple>
                    </div>
                    <div class="form-group">
                        <label for="photo">Photo</label>
                        <input type="file" class="form-control-file" id="photo" name="photo">
                    </div>
                    <div class="form-group">
                        <label for="logo">Logo</label>
                        <input type="file" class="form-control-file" id="logo" name="logo">
                    </div>
                    <div class="form-group">
                        <label for="bio">Bio</label>
                        <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Enter your bio"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="treatmentOffered">Treatment Offered</label>
                        <select class="form-control select2" id="treatmentOffered" name="treatmentOffered[]" multiple="multiple">
                            <option value="1">Treatment 1</option>
                            <option value="2">Treatment 2</option>
                            <option value="3">Treatment 3</option>
                            <option value="4">Treatment 4</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-custom">Submit</button>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.5/jquery.validate.min.js"></script>
    <script>
        $(document).ready(function() {
            $('.select2').select2();

            // Initialize form validation
            $('#clinicForm').validate({
                rules: {
                    fullName: {
                        required: true,
                        minlength: 2
                    },
                    clinicAddress: {
                        required: true,
                        minlength: 5
                    },
                    contactNumber: {
                        required: true,
                        phoneUS: true
                    },
                    email: {
                        required: true,
                        email: true
                    },
                    websiteLink: {
                        url: true
                    },
                    bio: {
                        maxlength: 500
                    },
                    treatmentOffered: {
                        required: true
                    }
                },
                messages: {
                    fullName: {
                        required: "Please enter your full name",
                        minlength: "Your name must consist of at least 2 characters"
                    },
                    clinicAddress: {
                        required: "Please enter the clinic address",
                        minlength: "Address must be at least 5 characters long"
                    },
                    contactNumber: {
                        required: "Please enter your contact number",
                        phoneUS: "Please enter a valid phone number"
                    },
                    email: {
                        required: "Please enter your email address",
                        email: "Please enter a valid email address"
                    },
                    websiteLink: {
                        url: "Please enter a valid URL"
                    },
                    bio: {
                        maxlength: "Bio should not exceed 500 characters"
                    },
                    treatmentOffered: {
                        required: "Please select at least one treatment"
                    }
                },
                errorElement: 'div',
                errorPlacement: function(error, element) {
                    error.addClass('error');
                    if (element.attr('type') === 'file') {
                        error.insertAfter(element.closest('.form-group'));
                    } else {
                        error.insertAfter(element);
                    }
                }
            });
        });
    </script>
</body>
</html>

@endsection
