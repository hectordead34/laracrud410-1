<style>
    * {
        box-sizing: border-box;
    }

    form{
        width: 300px;
        padding-inline: 20px;
        padding-block: 20px;
        border-radius: 12px;
        margin-block: auto;
        margin-inline: auto;
        background-color: #447a6e;
    }

    form label{
        width: 140px;
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
    }

    form input[type="text"],
    form input[type="number"]{
        width: 200px;
        padding-block: 3px;
        border:1px solid #ffffff;
        border-radius: 3px;
        background-color: #ffffff;
        margin-block: 4px;
        display:flex;
    }

    form button{
        width: 100%;
        padding: 8px 16px;
        margin-block-start: 32px;
        border: 1px solid #000;
        border-radius: 5px;
        display: block;
        color: #fff;
        background-color: #000;
    }

    form a{
        text-decoration: none;
    }

    form h3{
        width: 100%;
        height: 10px;
        font-weight: bold;
        font-family: Arial, Helvetica, sans-serif;
        display: inline-block;
    }
</style>

<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f7f8fa;
        margin: 0;
        padding: 20px;
    }
    h1 {
        text-align: center;
        color: #2d3436;
        font-size: 32px;
        margin-bottom: 20px;
    }
    form {
        background: linear-gradient(135deg, #74b9ff, #a29bfe);
        padding: 30px 40px;
        border-radius: 12px;
        box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
        max-width: 600px;
        margin: 0 auto;
        color: #ffffff;
    }
    label {
        display: block;
        font-weight: bold;
        color: #ffeaa7;
        margin: 10px 0 5px;
    }
    input[type="text"], input[type="number"], input[type="file"], select {
        width: 100%;
        padding: 10px;
        margin-bottom: 15px;
        border: none;
        border-radius: 8px;
        font-size: 16px;
        background-color: #dfe6e9;
        color: #2d3436;
    }
    input:focus, select:focus {
        border: 2px solid #fd79a8;
        outline: none;
        background-color: #ffeaa7;
    }
    button {
        width: 100%;
        padding: 12px;
        background-color: #00cec9;
        color: white;
        font-size: 18px;
        border: none;
        border-radius: 8px;
        cursor: pointer;
        transition: background-color 0.3s, transform 0.2s;
    }
    button:hover {
        background-color: #0984e3;
        transform: scale(1.05);
    }
    button:active {
        background-color: #6c5ce7;
        transform: scale(0.98);
    }
    .error {
        color: #d63031;
        background-color: #fab1a0;
        padding: 10px;
        margin-bottom: 15px;
        border: 1px solid #e17055;
        border-radius: 8px;
    }
</style>

