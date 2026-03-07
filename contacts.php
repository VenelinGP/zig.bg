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
<!-- bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-sans antialiased -->

<body class="bg-background-dark text-slate-200 font-sans antialiased overflow-x-hidden">
    <?php include 'header.html'; ?>

    <main class="pt-32 pb-20">
        <div class="max-w-7xl mx-auto px-6">
            <div class="mb-16">
                <h1 class="text-5xl md:text-7xl font-display font-extrabold text-white mb-6 tracking-tight">
                    СВЪРЖЕТЕ СЕ <br />
                    <span class="gradient-text">С ЕКИПА НИ</span>
                </h1>
                <p class="text-slate-400 text-lg md:text-xl max-w-2xl font-light">
                    Нашите експерти са на разположение за консултации относно вашия проект. Прецизност във всяка
                    комуникация.
                </p>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-12 items-start">
                <!-- <div class="glassmorphism p-8 md:p-12 rounded-[2.5rem] relative overflow-hidden group">
                    <div class="absolute -right-20 -top-20 w-64 h-64 bg-primary/5 blur-[80px] rounded-full"></div>
                    <h2 class="text-3xl font-display font-bold text-white mb-8">Запитване</h2>
                    <form class="space-y-6 relative z-10">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <div>
                                <label
                                    class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Имена</label>
                                <input
                                    class="w-full bg-slate-900/50 border border-slate-700/50 rounded-xl px-5 py-4 text-white placeholder:text-slate-600 focus:ring-0 input-glow transition-all duration-300"
                                    placeholder="Иван Иванов" type="text" />
                            </div>
                            <div>
                                <label
                                    class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Телефон</label>
                                <input
                                    class="w-full bg-slate-900/50 border border-slate-700/50 rounded-xl px-5 py-4 text-white placeholder:text-slate-600 focus:ring-0 input-glow transition-all duration-300"
                                    placeholder="+359 888 000 000" type="tel" />
                            </div>
                        </div>
                        <div>
                            <label
                                class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Имейл</label>
                            <input
                                class="w-full bg-slate-900/50 border border-slate-700/50 rounded-xl px-5 py-4 text-white placeholder:text-slate-600 focus:ring-0 input-glow transition-all duration-300"
                                placeholder="email@example.com" type="email" />
                        </div>
                        <div>
                            <label
                                class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Услуга</label>
                            <select
                                class="w-full bg-slate-900/50 border border-slate-700/50 rounded-xl px-5 py-4 text-white focus:ring-0 input-glow transition-all duration-300 appearance-none">
                                <option>Шлайфане на колянов вал</option>
                                <option>Ремонт на цилиндрова глава</option>
                                <option>CNC Металообработка</option>
                                <option>Друга услуга</option>
                            </select>
                        </div>
                        <div>
                            <label
                                class="block text-xs font-bold uppercase tracking-widest text-slate-500 mb-2 ml-1">Съобщение</label>
                            <textarea
                                class="w-full bg-slate-900/50 border border-slate-700/50 rounded-xl px-5 py-4 text-white placeholder:text-slate-600 focus:ring-0 input-glow transition-all duration-300"
                                placeholder="Опишете вашето запитване..." rows="4"></textarea>
                        </div>
                        <button
                            class="w-full py-5 bg-primary text-white rounded-xl font-extrabold text-lg shadow-lg shadow-primary/20 hover:scale-[1.02] active:scale-95 transition-all flex items-center justify-center gap-3 group/btn">
                            ИЗПРАТИ СЕГА
                            <span
                                class="material-symbols-outlined line-art-icon group-hover/btn:translate-x-1 transition-transform">send</span>
                        </button>
                    </form>
                </div> -->
                <div class="space-y-12">
                    <div class="grid grid-cols-1 md:grid-cols-1 gap-8">
                        <div class="space-y-8">
                            <div class="flex items-start gap-5 group">
                                <div
                                    class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                    <span class="material-symbols-outlined line-art-icon text-3xl">call</span>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-1">Обадете
                                        ни се</h4>
                                    <p class="text-xl font-display font-bold text-white">044 66 742</p>
                                    <p class="text-xl font-display font-bold text-white"> 0887 811 845
                                    </p>
                                    <p class="text-xl font-display font-bold text-white"> 0899 891 278</p>
                                    <p class="text-sm text-slate-400">Пон-Пет: 08:00 - 18:00</p>
                                </div>
                            </div>
                            <div class="flex items-start gap-5 group">
                                <div
                                    class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                    <span class="material-symbols-outlined line-art-icon text-3xl">mail</span>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-1">Пишете
                                        ни</h4>
                                    <p class="text-xl font-display font-bold text-white">gogovp@abv.bg</p>
                                    <p class="text-sm text-slate-400">Отговор до 2 часа</p>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-8">
                            <div class="flex items-start gap-5 group">
                                <div
                                    class="w-12 h-12 rounded-xl bg-slate-900 border border-slate-800 flex items-center justify-center text-primary group-hover:bg-primary group-hover:text-white transition-all duration-500">
                                    <span class="material-symbols-outlined line-art-icon text-3xl">location_on</span>
                                </div>
                                <div>
                                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-500 mb-1">Адрес
                                    </h4>
                                    <p class="text-xl font-display font-bold text-white">гр.Сливен, 8800</p>
                                    <p class="text-xl font-display font-bold text-white">ул. “полк. Борис
                                        Дрангов” № 8</p>
                                    <p class="text-xl font-display font-bold text-white">ул. “Родопи” № 3
                                        (Индустриална зона)
                                    </p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="space-y-12">
                    <div class=" relative h-[450px] w-[600px] rounded-[1rem] overflow-hidden border border-slate-800
                    group">
                        <div class="absolute inset-0 map-container">
                            <!-- <img alt="Location Map" class="w-full h-full object-cover opacity-30"
                                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4T9E-xIdyF1gGfQWDGy4DVjZ6hKrT1wIu7vJKXt8bMT5BPK12x2hec1PY7CnyY3PejwWIBhkXZtqH1wjskPa0MWor58MD0Li4LGqZi7pDmllZjLIIt9BMvs2t3DRO3QGV_xCvp6rU5gLH84B75LGPkKElVGBZDiVE2tFFzNDR-MZVg3nQh9YM5N1Hwf0SqXXcjRhaa2XXVxZG7xnuHl0zlMDUgHOKuTejJ8KYfVTMeSr6yiy_WcW_JJnsFXUD-7d0O5RiY4R0dn0" /> -->
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d23466.94421382538!2d26.315323710173633!3d42.67474595835199!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sz%26g+sliven!5e0!3m2!1sbg!2sbg!4v1556868718352!5m2!1sbg!2sbg"
                                width="600" height="450" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                            <!-- <div class="absolute inset-0 bg-slate-950/40"></div> -->
                        </div>
                        <!-- <div
                                class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-1/2 flex flex-col items-center">
                                <div class="relative">
                                    <div class="absolute -inset-4 bg-primary/40 blur-xl rounded-full animate-pulse">
                                    </div>
                                    <div
                                        class="relative w-8 h-8 bg-primary rounded-full border-4 border-white shadow-2xl flex items-center justify-center">
                                        <div class="w-2 h-2 bg-white rounded-full"></div>
                                    </div>
                                </div>
                                <div
                                    class="mt-4 glassmorphism px-4 py-2 rounded-lg text-xs font-bold tracking-widest text-white uppercase whitespace-nowrap border border-primary/30">
                                    ZIG.BG WORKSHOP
                                </div>
                            </div> -->
                        <!-- <div class="absolute bottom-6 right-6 flex flex-col gap-2">
                            <button
                                class="w-10 h-10 glassmorphism rounded-lg flex items-center justify-center text-white hover:bg-primary transition-colors">
                                <span class="material-symbols-outlined text-sm">add</span>
                            </button>
                            <button
                                class="w-10 h-10 glassmorphism rounded-lg flex items-center justify-center text-white hover:bg-primary transition-colors">
                                <span class="material-symbols-outlined text-sm">remove</span>
                            </button>
                        </div> -->
                    </div>
                </div>
            </div>
    </main>
    <?php include 'footer.html'; ?>
    <script src="js/header_scroll.js"></script>
</body>

</html>