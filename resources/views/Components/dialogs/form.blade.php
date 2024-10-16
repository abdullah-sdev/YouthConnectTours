<form action="" method="post" id="{{ $id }}">
    @csrf
    {{ $slot }}
    <style>
        .custom-input {
            font-size: .8rem;
            margin-bottom: .3rem;
            display: flex;
            flex-direction: column;
        }

        .custom-label {
            font-weight: bold;
        }

        .custom-input-field {
            border-radius: 10px;
            border: 1px solid #ccc;
            padding: .5rem;
        }

        .custom-input-field:focus {
            outline: none;
            border-color: #ff9100;
            /* box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25); */
        }

        .modal-footer {
            display: flex;
            justify-content: flex-end;
            align-items: center;
            padding: 10px;
            /* border-top: 1px solid #ccc; */
        }

        .step {
            /* display: none; */
        }

        .step.active {
            display: block;
        }
    </style>

   
</form>
