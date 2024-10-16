<dialog id="{{ $id }}">

    <style>
        dialog {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            border: none;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            padding: 20px;
            width: clamp(100px, 80vw, 500px);
            background: #fff;
            z-index: 1000;
        }

        .modal-header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 10px;
            border-bottom: 1px solid #ccc;
        }

        .modal-title {
            margin: 0;
        }

        .btn-close {
            border: none;
            background: transparent;
            font-size: 24px;
            cursor: pointer;
        }

        .modal-body {
            padding: 20px;
        }

        

        .btn {
            border: none;
            /* border-color: #ff9100; */
            background: #ff9100;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-left: .3rem;
        }

        .btn-secondary {
            background: #6c757d;
        }
    </style>
<div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title">
                {{ $title }}
            </h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
        </div>
        <div class="modal-body">
            {{-- <p>Modal body text goes here.</p> --}}
            {{ $slot }}
        </div>
       
    </div>
</div>
</dialog>


