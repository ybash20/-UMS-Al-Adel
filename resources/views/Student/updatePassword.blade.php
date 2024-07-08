@extends('layouts.master')
@section('title', cbLang('Edit Password') )
@section('main')
<style>
    .content_wrapper_stupass {
        display: flex;
        justify-content: center;
        align-items: center;
        height: 100vh; /* Full viewport height */
        background: rgba(0, 0, 0, 0.1); /* Light background */
    }

    .content_stupass {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        max-width: 400px;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
        position: relative;
    }

    .content_stupass h2 {
        margin-top: 0;
        font-size: 24px;
        color: #333;
    }

    .content_stupass form {
        margin-top: 20px;
        display: flex;
        flex-direction: column;
        align-items: center;
    }

    .content_stupass form input,
    .content_stupass form button {
        width: 100%;
        padding: 10px;
        margin-bottom: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
        font-size: 16px;
    }

    .content_stupass form button {
        background-color: #007bff;
        color: white;
        border: none;
        cursor: pointer;
        transition: background-color 0.3s;
    }
    .content_stupass form label{
        font-size: 16px;
        margin-bottom: 10px;
    }

    .content_stupass form button:hover {
        background-color: #0056b3;
    }

    .success_message_stupass {
        color: green;
        margin-top: 13px;
        font-size: 17px;

    }

    .error_message_stupass {
        color: red;
        margin-top: 13px;
        font-size: 17px;
    }

    /* Styles for screens smaller than 600px */
    @media (max-width: 599px) {
        .content_stupass {
            padding: 10px;
            max-width: 300px;
        }

        .content_stupass h2 {
            font-size: 20px;
        }

        .content_stupass form label,
        .content_stupass form input,
        .content_stupass form button {
            font-size: 14px;
        }
    }

    /* Styles for screens between 600px and 900px */
    @media (min-width: 600px) and (max-width: 900px) {
        .content_stupass {
            max-width: 400px;
        }
    }

    /* Styles for screens larger than 900px */
    @media (min-width: 900px) {
        .content_stupass {
            max-width: 500px;
        }
    }
</style>

<div class="content_wrapper_stupass">
    <div class="content_stupass">
        <h2>{{ cbLang('Edit Password') }}</h2>
        <form id="resetPasswordForm" action="{{ route('updatePassword') }}" method="POST">
            @csrf
            <label for="newPassword"> {{ cbLang('Enter New Password') }} </label>
            <input type="password" id="newPassword" name="newPassword" required>

            <label for="confirmPassword"> {{ cbLang('Confirm New Password') }} </label>
            <input type="password" id="confirmPassword" name="confirmPassword" required>

            <button type="submit">{{ cbLang('Submit') }}</button>
        </form>
        <div class="success_message_stupass" id="successMessage">
            @if (session('success'))
                <span style="color: green;">{{ session('success') }}</span>
            @elseif (session('error'))
                <span style="color: red;">{{ session('error') }}</span>
            @endif
        </div>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        var resetPasswordForm = document.getElementById('resetPasswordForm');
        var successMessage = document.getElementById('successMessage');

        // Close the success message automatically after 10 seconds
        if (successMessage.innerText !== '') {
            setTimeout(function() {
                successMessage.innerText = '';
                resetPasswordForm.reset();
            }, 10000);
        }

        // Add event listener to the form submit button
        resetPasswordForm.addEventListener('submit', function(event) {
            event.preventDefault(); // Prevent the form from submitting
            
            // Get the values of the new password and confirm password fields
            var newPassword = document.getElementById('newPassword').value;
            var confirmPassword = document.getElementById('confirmPassword').value;
            
            // Check if the passwords match
            if (newPassword === confirmPassword) {
                // If the passwords match, submit the form
                this.submit();
            } else {
                // If the passwords don't match, display an error message
                var errorMessage = document.createElement('div');
                errorMessage.style.color = 'red';
                errorMessage.textContent = '{{ cbLang("Passwords do not match") }}';
                successMessage.appendChild(errorMessage);
            }
        });
    });
</script>
@endsection
