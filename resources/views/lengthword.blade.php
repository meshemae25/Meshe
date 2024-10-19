<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Length of a Word</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: flex-start; 
            height: 100vh; 
            background-color: #ace2d7; 
            font-family: 'Poppins', sans-serif;
        }

        .form {
            background-color: white ;
            border-radius: 20px;
            padding: 50px 60px;  
            width: 100%;        
            max-width: 1200px;    
            margin: 100px auto;   
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.15);  
            text-align: center;
}

        .form h2 {
            color: #444;
            font-size: 2em;  
            margin-bottom: 40px;
            font-weight: 600;
}

        .length-word {
            font-style: italic;
            margin: 15px 0;
            padding: 15px;
            background-color: #f7fbfc; 
            border-left: 4px solid #0D7C66; 
            font-size: 1.1em;
            color: #555;
            text-align: left; 
            
        }

        .form-container {
            display: flex;
            flex-direction: column;
            gap: 20px; 
        }

        .form-container label {
            font-size: 1.1em;
            color: #333;
            text-align: left;
            margin-bottom: 5px;
            font-weight: 500;
        }

        .form-container input[type="text"] {
            padding: 12px;
            border: 1px solid #ddd; 
            border-radius: 8px; 
            font-size: 1.1em;
            width: 95%;
            box-shadow: inset 0 2px 5px rgba(0, 0, 0, 0.05); 
            transition: border-color 0.3s ease; 
        }

        .form-container input[type="text"]:focus {
            border-color: #42a5f5; 
            outline: none;
        }

        .form-container button {
            padding: 12px;
            background-color: #8983dd;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1em;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .form-container button:hover {
            background-color: #f0b877; 
            transform: translateY(-2px);
        }

        .alert {
            margin-top: 20px;
            padding: 15px;
            background-color: #ace2d7;
            color: #721c24;
            border: 1px solid #f5c6cb;
            border-radius: 6px;
            font-size: 1em;
        }
    </style>
</head>
<body>

<section class="form" id="form">
    <h2>Would you mind answering this first?</h2>
    <blockquote class="length-word">
                        Which word is spelled incorrectly in every dictionary?
    <form action="{{ route('submitAnswer') }}" method="POST" class="form-container">
        @csrf
        <input type="text" name="answer" id="label" placeholder="e.g., Incorrectly" required>
        <button type="submit">Submit</button>
    </form>

    @if(session('error'))
        <div class="alert alert-danger">
            {{ session('error') }}
        </div>
    @endif
</section>

</body>
</html>
