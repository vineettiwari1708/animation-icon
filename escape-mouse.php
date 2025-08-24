<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>CEA</title>
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }
    body {
      font-family: Arial, sans-serif;
      background: #f3f4f6;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      min-height: 100vh;
      overflow: hidden;
      position: relative;
    }

    /* Moving Header */
    h1 {
      position: absolute;
      font-size: 3rem;
      font-weight: bold;
      color: #1f2937;
      top: 30%;
      left: 40%;
      transition: all 0.6s ease; /* smooth escape */
      cursor: pointer;
    }

    /* Buttons container */
    .buttons {
      position: relative;
      z-index: 2;
      display: flex;
      flex-direction: column;
      gap: 1.5rem;
    }
    @media(min-width: 640px) {
      .buttons {
        flex-direction: row;
      }
    }

    /* Button styling */
    .btn {
      padding: 1rem 2rem;
      font-size: 1.2rem;
      font-weight: bold;
      color: #fff;
      text-decoration: none;
      border-radius: 12px;
      box-shadow: 0 4px 6px rgba(0,0,0,0.1);
      transition: all 0.3s ease;
      display: inline-block;
    }
    .btn:hover {
      transform: scale(1.05);
    }
    .btn-individual {
      background: linear-gradient(90deg, #3b82f6, #6366f1);
    }
    .btn-individual:hover {
      background: linear-gradient(90deg, #2563eb, #4f46e5);
    }
    .btn-stock {
      background: linear-gradient(90deg, #10b981, #14b8a6);
    }
    .btn-stock:hover {
      background: linear-gradient(90deg, #059669, #0d9488);
    }
  </style>
</head>
<body>

  <!-- Moving Header -->
  <h1 id="movingHeader">CEA</h1>

  <!-- Buttons Section -->
  <div class="buttons">
    <a href="individual.php" class="btn btn-individual">Individual</a>
    <a href="stock.php" class="btn btn-stock">Stock</a>
  </div>

  <script>
    const header = document.getElementById("movingHeader");
    const body = document.body;

    header.addEventListener("mouseenter", () => {
      const maxX = window.innerWidth - header.offsetWidth - 20;
      const maxY = window.innerHeight - header.offsetHeight - 20;
      const newX = Math.random() * maxX;
      const newY = Math.random() * maxY;

      header.style.left = newX + "px";
      header.style.top = newY + "px";
    });
  </script>
</body>
</html>
