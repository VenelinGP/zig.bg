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

<body class="bg-background-light dark:bg-background-dark text-slate-800 dark:text-slate-200 font-sans antialiased">
    <?php include 'header.html'; ?>

    <section class="relative h-screen flex items-center justify-center overflow-hidden">
        <div class="absolute inset-0 hero-video-container">
            <img alt="High speed CNC milling process" class="w-full h-full object-cover"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlnd4eRK3xZXpnwB_6AwmC5-g_9MY4kqA8dkY-wLQC543d4phpCMeJimKVcfI0CAvjWUSMaUZWLqD47pzs_-JNpFPJpE3POeMSLWMCmcpsvqStV2ahCbl-zqSupIBOS0nakneKAlvcGO146F_tEWcGep_SjMIOU_NJQNOoUMJBCFq51KMWHqcKrKf_iGkZUUdWKrW9BihHHDmMf7CjD5-gDE5V12lwf2Y8JUU2_aUbRvkTz_Moq7EPVx5UTopQ8Cyka1zh7imUz30" />
        </div>
        <div class="relative z-10 text-center px-6 max-w-5xl">
            <div
                class="inline-flex items-center gap-2 px-4 py-2 glassmorphism rounded-full mb-8 text-primary font-bold text-xs uppercase tracking-[0.2em]">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Индустрия 4.0 Технологии
            </div>
            <h1 class="text-5xl md:text-8xl font-display font-extrabold text-white mb-6 leading-[1.1] tracking-tight">
                ПРЕЦИЗНОСТ <br />
                <span class="gradient-text">БЕЗ КОМПРОМИСИ</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light leading-relaxed">
                Следващо поколение металообработка и ремонт на двигатели с най-иновативните технологии на пазара.
                Гарантирано
                качество за всеки детайл.
            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <button
                    class="px-10 py-5 bg-primary text-white rounded-xl font-extrabold text-lg animate-neon hover:scale-105 transition-transform flex items-center justify-center gap-3">
                    ЗАПИТВАНЕ ЗА ОФЕРТА
                    <span class="material-icons-round">arrow_forward</span>
                </button>
                <button
                    class="px-10 py-5 glassmorphism text-white rounded-xl font-bold text-lg hover:bg-white/10 transition-colors flex items-center justify-center gap-3">
                    НАШИТЕ УСЛУГИ
                </button>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-20">
                <div class="glassmorphism p-6 rounded-2xl text-left border-l-4 border-primary">
                    <span class="material-icons-round text-primary text-3xl mb-3">biotech</span>
                    <h3 class="text-white font-bold text-lg mb-1">Точност до 0.001мм</h3>
                    <p class="text-slate-400 text-sm">Най-висок клас измервателни системи</p>
                </div>
                <div class="glassmorphism p-6 rounded-2xl text-left border-l-4 border-accent-blue">
                    <span class="material-icons-round text-accent-blue text-3xl mb-3">verified</span>
                    <h3 class="text-white font-bold text-lg mb-1">Сертифициран процес</h3>
                    <p class="text-slate-400 text-sm">Гарантирано качество по ISO стандарти</p>
                </div>
                <div class="glassmorphism p-6 rounded-2xl text-left border-l-4 border-white">
                    <span class="material-icons-round text-white text-3xl mb-3">speed</span>
                    <h3 class="text-white font-bold text-lg mb-1">Експресна работа</h3>
                    <p class="text-slate-400 text-sm">Среден срок за изпълнение 48 часа</p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-32 px-6 relative overflow-hidden">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-20">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-4 dark:text-white">ЗАЩО ДА ИЗБЕРЕТЕ НАС
                </h2>
                <div class="w-24 h-1 bg-primary mx-auto mb-6"></div>
                <p class="text-slate-500 dark:text-slate-400 max-w-xl mx-auto text-lg">
                    Над 20 години опит, съчетан с най-модерните технологии в бранша.
                </p>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <div
                    class="group relative bg-white dark:bg-slate-900 p-10 rounded-3xl shadow-xl dark:shadow-slate-950/50 hover:-translate-y-4 transition-all duration-500 border border-slate-100 dark:border-slate-800">
                    <div
                        class="absolute -top-6 left-10 w-16 h-16 bg-primary rounded-2xl flex items-center justify-center shadow-lg shadow-primary/30 group-hover:rotate-6 transition-transform">
                        <span class="material-icons-round text-white text-3xl">precision_manufacturing</span>
                    </div>
                    <h3 class="text-2xl font-display font-bold mt-6 mb-4 dark:text-white">Прецизност</h3>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed">
                        Работим с толеранс до 0.001мм, гарантирайки перфектно прилягане на всички компоненти и дълъг
                        живот на
                        двигателя.
                    </p>
                </div>
                <div
                    class="group relative bg-white dark:bg-slate-900 p-10 rounded-3xl shadow-xl dark:shadow-slate-950/50 hover:-translate-y-4 transition-all duration-500 border border-slate-100 dark:border-slate-800">
                    <div
                        class="absolute -top-6 left-10 w-16 h-16 bg-accent-blue rounded-2xl flex items-center justify-center shadow-lg shadow-accent-blue/30 group-hover:rotate-6 transition-transform">
                        <span class="material-icons-round text-white text-3xl">memory</span>
                    </div>
                    <h3 class="text-2xl font-display font-bold mt-6 mb-4 dark:text-white">Технологии</h3>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed">
                        Стругове, шлифовъчни машини и 3D измервателни системи от последно поколение (2025-2026 моделна
                        линия).
                    </p>
                </div>
                <div
                    class="group relative bg-white dark:bg-slate-900 p-10 rounded-3xl shadow-xl dark:shadow-slate-950/50 hover:-translate-y-4 transition-all duration-500 border border-slate-100 dark:border-slate-800">
                    <div
                        class="absolute -top-6 left-10 w-16 h-16 bg-slate-800 dark:bg-slate-700 rounded-2xl flex items-center justify-center shadow-lg group-hover:rotate-6 transition-transform">
                        <span class="material-icons-round text-white text-3xl">groups</span>
                    </div>
                    <h3 class="text-2xl font-display font-bold mt-6 mb-4 dark:text-white">Експертен екип</h3>
                    <p class="text-slate-500 dark:text-slate-400 leading-relaxed">
                        Опитни специалисти с дългогодишен опит в ремонта на корабни, тежкотоварни и спортни двигатели.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class="py-32 bg-slate-50 dark:bg-slate-950 px-6" id="services">
        <div class="max-w-7xl mx-auto">
            <div class="flex flex-col md:flex-row justify-between items-end mb-16 gap-6">
                <div class="max-w-xl">
                    <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-4 dark:text-white">НАШИТЕ УСЛУГИ</h2>
                    <p class="text-slate-500 dark:text-slate-400 text-lg">
                        Комплексни технологични решения за ремонт и възстановяване на индустриални компоненти.
                    </p>
                </div>
                <button
                    class="px-8 py-3 border-2 border-primary text-primary hover:bg-primary hover:text-white transition-all rounded-xl font-bold">
                    ВИЖ ВСИЧКИ УСЛУГИ
                </button>
            </div>
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-10">
                <div
                    class="group overflow-hidden bg-white dark:bg-slate-900 rounded-[0.5rem] shadow-2xl transition-all duration-500 border border-slate-200 dark:border-slate-800">
                    <div class="relative h-72 overflow-hidden">
                        <img alt="Machining of crankshafts"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4T9E-xIdyF1gGfQWDGy4DVjZ6hKrT1wIu7vJKXt8bMT5BPK12x2hec1PY7CnyY3PejwWIBhkXZtqH1wjskPa0MWor58MD0Li4LGqZi7pDmllZjLIIt9BMvs2t3DRO3QGV_xCvp6rU5gLH84B75LGPkKElVGBZDiVE2tFFzNDR-MZVg3nQh9YM5N1Hwf0SqXXcjRhaa2XXVxZG7xnuHl0zlMDUgHOKuTejJ8KYfVTMeSr6yiy_WcW_JJnsFXUD-7d0O5RiY4R0dn0" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-8">
                            <h3 class="text-3xl font-display font-bold text-white">Струговане на Колянови Валове</h3>
                        </div>
                    </div>
                    <div class="p-10">
                        <p class="text-slate-500 dark:text-slate-400 mb-8 text-lg">
                            Прецизно струговане и шлайфане на валове за автомобили, камиони, кораби и индустриални
                            двигатели.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                                <span
                                    class="material-icons-round text-primary bg-primary/10 p-1 rounded-full text-lg">check</span>
                                Автомобилни и спортни двигатели
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                                <span
                                    class="material-icons-round text-primary bg-primary/10 p-1 rounded-full text-lg">check</span>
                                Дизелови генератори и кораби
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                                <span
                                    class="material-icons-round text-primary bg-primary/10 p-1 rounded-full text-lg">check</span>
                                Индустриални задвижвания
                            </li>
                        </ul>
                        <button
                            class="w-full py-4 bg-primary text-white font-bold rounded-2xl hover:bg-primary/90 transition-colors shadow-lg shadow-primary/20">
                            ЗАПИТВАНЕ ЗА ЦЕНА
                        </button>
                    </div>
                </div>
                <div
                    class="group overflow-hidden bg-white dark:bg-slate-900 rounded-[0.5rem] shadow-2xl transition-all duration-500 border border-slate-200 dark:border-slate-800">
                    <div class="relative h-72 overflow-hidden">
                        <img alt="Cylinder head repair"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1AK701jsJ21JHO6DXjI0eU5cqDsPMfO7OM5psBT5rFACcyVfwpn7MfhR-opfVnhubQaXjzZak8e9aF2XAsMk_u8uew50sx4wmiYFvU_8iQswkPVsQiO2dHJnZBknajPyootBnxOPm9DMAsMUIhYANuphY5dP_yC7xdwSknCRo5pTQINAFs7zDdig356MZ5u3gKHY2UaO9uau14Mdo6kpdjvQiIuvbNK-UXFaw6B0-CEpPi7SHO_7x70e1ELf03tMKbh-_VC7WqoU" />
                        <div class="absolute inset-0 bg-gradient-to-t from-black/80 to-transparent flex items-end p-8">
                            <h3 class="text-3xl font-display font-bold text-white">Ремонт и Възстановяване</h3>
                        </div>
                    </div>
                    <div class="p-10">
                        <p class="text-slate-500 dark:text-slate-400 mb-8 text-lg">
                            Пълно възстановяване на повредени детайли, включително заваряване и специфична термична
                            обработка.
                        </p>
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                                <span
                                    class="material-icons-round text-primary bg-primary/10 p-1 rounded-full text-lg">check</span>
                                Заваряване на пукнатини (Аргон/Лазер)
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                                <span
                                    class="material-icons-round text-primary bg-primary/10 p-1 rounded-full text-lg">check</span>
                                Динамично балансиране
                            </li>
                            <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                                <span
                                    class="material-icons-round text-primary bg-primary/10 p-1 rounded-full text-lg">check</span>
                                Повърхностно укрепване
                            </li>
                        </ul>
                        <button
                            class="w-full py-4 bg-slate-800 dark:bg-slate-700 text-white font-bold rounded-2xl hover:bg-slate-700 dark:hover:bg-slate-600 transition-colors shadow-lg">
                            ЗАПИТВАНЕ ЗА ЦЕНА
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 relative">
        <div
            class="max-w-7xl mx-auto glassmorphism bg-slate-900/90 dark:bg-slate-900/40 rounded-[0.5rem] p-12 md:p-20 text-center relative overflow-hidden">
            <div class="absolute -right-20 -top-20 w-64 h-64 bg-primary/20 blur-[100px] rounded-full"></div>
            <div class="absolute -left-20 -bottom-20 w-64 h-64 bg-accent-blue/20 blur-[100px] rounded-full"></div>
            <div class="relative z-10">
                <h2 class="text-4xl md:text-6xl font-display font-extrabold text-white mb-8">ГОТОВИ ЛИ СТЕ ДА ЗАПОЧНЕМ?
                </h2>
                <p class="text-slate-300 text-xl max-w-2xl mx-auto mb-12">
                    Изпратете ни вашето запитване и наш специалист ще се свърже с вас до 2 часа с предварителна оферта.
                </p>
                <div class="flex flex-col sm:flex-row gap-6 justify-center items-center">
                    <a class="text-white text-2xl font-bold flex items-center gap-3 hover:text-primary transition-colors"
                        href="tel:0888888888">
                        <span class="material-icons-round text-primary text-3xl">phone_in_talk</span>
                        0888 888 888
                    </a>
                    <div class="hidden sm:block w-px h-10 bg-slate-700"></div>
                    <button
                        class="px-12 py-5 bg-primary text-white rounded-2xl font-extrabold text-lg hover:shadow-neon hover:scale-105 transition-all">
                        ИЗПРАТИ ЗАПИТВАНЕ
                    </button>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.html'; ?>
    <script src="js/header_scroll.js"></script>
</body>

</html>