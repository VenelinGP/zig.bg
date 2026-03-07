<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Z&G Ltd.</title>
    <link href="https://fonts.googleapis.com" rel="preconnect" />
    <link crossorigin="" href="https://fonts.gstatic.com" rel="preconnect" />
    <link
        href="https://fonts.googleapis.com/css2?family=Exo+2:wght@400;600;800&amp;family=Inter:wght@300;400;500&amp;display=swap"
        rel="stylesheet" />
    <link
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:wght,FILL@100..700,0..1&amp;display=swap"
        rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
    tailwind.config = {
        darkMode: "class",
        theme: {
            extend: {
                colors: {
                    primary: "#E11D48",
                    "background-dark": "#020617",
                    "accent-blue": "#0EA5E9",
                    "background-light": "#F8FAFC",
                },
                fontFamily: {
                    display: ["'Exo 2'", "sans-serif"],
                    sans: ["'Inter'", "sans-serif"],
                },
                borderRadius: {
                    DEFAULT: "0.5rem",
                    'xl': '0.5rem',
                    '2xl': '0.5rem',
                    '3xl': '0.5rem',
                },
                boxShadow: {
                    'neon-red': '0 0 20px rgba(225, 29, 72, 0.3), 0 0 40px rgba(225, 29, 72, 0.15)',
                    'neon-blue': '0 0 20px rgba(14, 165, 233, 0.3)',
                    'glass': '0 8px 32px 0 rgba(0, 0, 0, 0.37)',
                }
            },
        },
    };
    </script>
    <style type="text/tailwindcss">
        @layer utilities {
        .glassmorphism {
          background: rgba(15, 23, 42, 0.6);
          backdrop-filter: blur(16px);
          -webkit-backdrop-filter: blur(16px);
          border: 1px solid rgba(255, 255, 255, 0.08);
        }
        .gradient-text {
          background: linear-gradient(135deg, #ffffff 30%, #e11d48 100%);
          -webkit-background-clip: text;
          -webkit-text-fill-color: transparent;
        }
        .hero-overlay {
          background: linear-gradient(to bottom, rgba(2, 6, 23, 0.6) 0%, rgba(2, 6, 23, 1) 100%);
        }
        .hover-3d:hover {
          transform: perspective(1000px) rotateX(2deg) rotateY(-2deg) translateY(-8px);
          transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .material-symbols-outlined {
          font-variation-settings: 'FILL' 1, 'wght' 400, 'GRAD' 0, 'opsz' 24;
        }
      }
    </style>
</head>

<body class="bg-background-light text-slate-200 font-sans antialiased overflow-x-hidden">
    <?php include 'header.html'; ?>
    <h1 class="text-4xl font-display font-bold text-center mt-20 mb-10">Партньори</h1>

    <?php include 'footer.html'; ?>
    <script src="js/header_scroll.js"></script>
</body>

</html>