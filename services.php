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
    <link href="./styles/output.css" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>`
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
    <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img alt="High-contrast engine block machining" class="w-full h-full object-cover scale-105"
                src="https://lh3.googleusercontent.com/aida-public/AB6AXuAlnd4eRK3xZXpnwB_6AwmC5-g_9MY4kqA8dkY-wLQC543d4phpCMeJimKVcfI0CAvjWUSMaUZWLqD47pzs_-JNpFPJpE3POeMSLWMCmcpsvqStV2ahCbl-zqSupIBOS0nakneKAlvcGO146F_tEWcGep_SjMIOU_NJQNOoUMJBCFq51KMWHqcKrKf_iGkZUUdWKrW9BihHHDmMf7CjD5-gDE5V12lwf2Y8JUU2_aUbRvkTz_Moq7EPVx5UTopQ8Cyka1zh7imUz30" />
            <div class="absolute inset-0 hero-overlay"></div>
        </div>
        <div class="relative z-10 text-center px-6 max-w-5xl">
            <!-- <div
                class="inline-flex items-center gap-2 px-4 py-2 glassmorphism rounded-full mb-8 text-primary font-bold text-xs uppercase tracking-[0.2em]">
                <span class="relative flex h-2 w-2">
                    <span
                        class="animate-ping absolute inline-flex h-full w-full rounded-full bg-primary opacity-75"></span>
                    <span class="relative inline-flex rounded-full h-2 w-2 bg-primary"></span>
                </span>
                Индустрия 4.0 Технологии
            </div> -->
            <h1 class="text-5xl md:text-8xl font-display font-extrabold text-white mb-6 leading-[1.1] tracking-tight">
                ПРЕЦИЗНОСТ <br />
                <span class="gradient-text">БЕЗ КОМПРОМИСИ</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light leading-relaxed">
                Следващо поколение металообработка и ремонт на двигатели с най-иновативните технологии на пазара
                <br> Гарантирано качество за всеки детайл.
            </p>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light leading-relaxed">

            </p>
            <div class="flex flex-col sm:flex-row gap-6 justify-center">
                <button
                    class="px-10 py-5 bg-primary text-white rounded-xl font-extrabold text-lg animate-neon hover:scale-105 transition-transform flex items-center justify-center gap-3">
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

    <section class="py-24 px-6 relative z-10 -mt-20 bg-slate-950">
        <div class="max-w-7xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div
                    class="group glassmorphism rounded-3xl overflow-hidden hover-3d transition-all duration-500 border-t border-white/10">
                    <div class="relative h-64">
                        <img alt="Cylinder head pressure testing"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4T9E-xIdyF1gGfQWDGy4DVjZ6hKrT1wIu7vJKXt8bMT5BPK12x2hec1PY7CnyY3PejwWIBhkXZtqH1wjskPa0MWor58MD0Li4LGqZi7pDmllZjLIIt9BMvs2t3DRO3QGV_xCvp6rU5gLH84B75LGPkKElVGBZDiVE2tFFzNDR-MZVg3nQh9YM5N1Hwf0SqXXcjRhaa2XXVxZG7xnuHl0zlMDUgHOKuTejJ8KYfVTMeSr6yiy_WcW_JJnsFXUD-7d0O5RiY4R0dn0" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-8">
                            <span
                                class="px-3 py-1 bg-slate-700 text-white text-[10px] font-bold rounded uppercase tracking-widest mb-2 inline-block">Category
                                03</span>
                            <h3 class="text-3xl font-display font-extrabold text-white uppercase tracking-tight">
                                Цилиндрови глави</h3>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Пpоверка за
                                    херметичност на охладилетната система чрез водна преса</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span
                                    class="text-slate-300 group-hover/item:text-white transition-colors">Възстановяване
                                    на работните повърхности (фаски) на клапанното седло и шлайфане на работните
                                    повърхности на клапана</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Смяна на
                                    водач на клапан и окончателна прецизна обработка</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Смяна на
                                    клапанно седло, демонтаж, обработка, монтаж</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Повърхностна
                                    обработка на цилиндровата глава чрез фрезоване и шлаиф</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span
                                    class="text-slate-300 group-hover/item:text-white transition-colors">Възстановяване
                                    на вал линията (тунел на лагерните шийки) на разпределителните валове</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span
                                    class="text-slate-300 group-hover/item:text-white transition-colors">Възстановяване
                                    целоста на главата и прахово-газово динамично напластяване</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">По желание на
                                    клиента във фирмата се извършва необходимите регулировки на цилиндровата
                                    глава</span>
                            </li>

                        </ul>
                        <button
                            class="w-full py-4 bg-primary/10 border border-primary/30 text-white font-bold rounded-2xl hover:bg-primary transition-all shadow-lg hover:shadow-neon-red uppercase tracking-widest text-xs flex items-center justify-center gap-2 group-hover:bg-primary">
                            <span>Запитване за цена</span>
                            <span class="material-symbols-outlined text-sm">arrow_outward</span>
                        </button>
                    </div>
                </div>
                <div
                    class="group glassmorphism rounded-3xl overflow-hidden hover-3d transition-all duration-500 border-t border-white/10">
                    <div class="relative h-64">
                        <img alt="Engine block boring"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuD4T9E-xIdyF1gGfQWDGy4DVjZ6hKrT1wIu7vJKXt8bMT5BPK12x2hec1PY7CnyY3PejwWIBhkXZtqH1wjskPa0MWor58MD0Li4LGqZi7pDmllZjLIIt9BMvs2t3DRO3QGV_xCvp6rU5gLH84B75LGPkKElVGBZDiVE2tFFzNDR-MZVg3nQh9YM5N1Hwf0SqXXcjRhaa2XXVxZG7xnuHl0zlMDUgHOKuTejJ8KYfVTMeSr6yiy_WcW_JJnsFXUD-7d0O5RiY4R0dn0" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-8">
                            <span
                                class="px-3 py-1 bg-primary text-white text-[10px] font-bold rounded uppercase tracking-widest mb-2 inline-block">Category
                                01</span>
                            <h3 class="text-3xl font-display font-extrabold text-white uppercase tracking-tight">Ремонт
                                на блокове
                            </h3>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Разстъргване
                                    и
                                    хонинговане</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Набиване на
                                    втулки
                                    (ризи)</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Челно
                                    шлайфане на блок</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Проверка за
                                    пукнатини
                                    (магнитен тест)</span>
                            </li>
                        </ul>
                        <button
                            class="w-full py-4 bg-primary/10 border border-primary/30 text-white font-bold rounded-2xl hover:bg-primary transition-all shadow-lg hover:shadow-neon-red uppercase tracking-widest text-xs flex items-center justify-center gap-2 group-hover:bg-primary">
                            <span>Запитване за цена</span>
                            <span class="material-symbols-outlined text-sm">arrow_outward</span>
                        </button>
                    </div>
                </div>
                <div
                    class="group glassmorphism rounded-3xl overflow-hidden hover-3d transition-all duration-500 border-t border-white/10">
                    <div class="relative h-64">
                        <img alt="Crankshaft grinding"
                            class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700"
                            src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1AK701jsJ21JHO6DXjI0eU5cqDsPMfO7OM5psBT5rFACcyVfwpn7MfhR-opfVnhubQaXjzZak8e9aF2XAsMk_u8uew50sx4wmiYFvU_8iQswkPVsQiO2dHJnZBknajPyootBnxOPm9DMAsMUIhYANuphY5dP_yC7xdwSknCRo5pTQINAFs7zDdig356MZ5u3gKHY2UaO9uau14Mdo6kpdjvQiIuvbNK-UXFaw6B0-CEpPi7SHO_7x70e1ELf03tMKbh-_VC7WqoU" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent">
                        </div>
                        <div class="absolute bottom-6 left-8">
                            <span
                                class="px-3 py-1 bg-accent-blue text-white text-[10px] font-bold rounded uppercase tracking-widest mb-2 inline-block">Category
                                02</span>
                            <h3 class="text-3xl font-display font-extrabold text-white uppercase tracking-tight">
                                Колянови валове</h3>
                        </div>
                    </div>
                    <div class="p-8">
                        <ul class="space-y-4 mb-10">
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-accent-blue text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Прецизно
                                    шлайфане на ремонтни
                                    размери</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-accent-blue text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Динамично
                                    балансиране</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-accent-blue text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Суперфиниш на
                                    шийките</span>
                            </li>
                            <li class="flex items-start gap-3 group/item">
                                <span class="material-symbols-outlined text-accent-blue text-xl">check_circle</span>
                                <span class="text-slate-300 group-hover/item:text-white transition-colors">Азотиране и
                                    закаляване</span>
                            </li>
                        </ul>
                        <button
                            class="w-full py-4 bg-primary/10 border border-primary/30 text-white font-bold rounded-2xl hover:bg-primary transition-all shadow-lg hover:shadow-neon-red uppercase tracking-widest text-xs flex items-center justify-center gap-2 group-hover:bg-primary">
                            <span>Запитване за цена</span>
                            <span class="material-symbols-outlined text-sm">arrow_outward</span>
                        </button>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">ИНДУСТРИАЛЕН
                    КАПАЦИТЕТ</h2>
                <p class="text-slate-400 text-lg mb-12 leading-relaxed">
                    Ние не просто ремонтираме. Ние подобряваме. Чрез използването на CNC машини от последно поколение
                    (2025
                    моделна линия) и лазерни системи за измерване, Zig.bg гарантира параметри, надвишаващи оригиналните
                    заводски
                    спецификации.
                </p>
                <div class="grid grid-cols-2 gap-8">
                    <div class="border-l-2 border-primary pl-6">
                        <div class="text-4xl font-display font-black mb-1">20+</div>
                        <div class="text-xs text-slate-500 uppercase tracking-widest font-bold">Години опит</div>
                    </div>
                    <div class="border-l-2 border-accent-blue pl-6">
                        <div class="text-4xl font-display font-black mb-1">0.001</div>
                        <div class="text-xs text-slate-500 uppercase tracking-widest font-bold">мм Точност</div>
                    </div>
                </div>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="High-tech engine repair lab" class="w-full h-full object-cover grayscale opacity-80"
                        src="https://lh3.googleusercontent.com/aida-public/AB6AXuA1AK701jsJ21JHO6DXjI0eU5cqDsPMfO7OM5psBT5rFACcyVfwpn7MfhR-opfVnhubQaXjzZak8e9aF2XAsMk_u8uew50sx4wmiYFvU_8iQswkPVsQiO2dHJnZBknajPyootBnxOPm9DMAsMUIhYANuphY5dP_yC7xdwSknCRo5pTQINAFs7zDdig356MZ5u3gKHY2UaO9uau14Mdo6kpdjvQiIuvbNK-UXFaw6B0-CEpPi7SHO_7x70e1ELf03tMKbh-_VC7WqoU" />
                </div>
                <div
                    class="absolute -bottom-10 -right-10 glassmorphism p-8 rounded-2xl border border-primary/20 shadow-neon-red">
                    <p class="text-primary font-bold text-sm uppercase mb-2">Наличен ресурс</p>
                    <p class="text-white text-xl font-display font-bold leading-tight">Експресно <br />изпълнение за
                        48ч.</p>
                </div>
            </div>
        </div>
    </section>

    <?php include 'footer.html'; ?>
    <script src="js/header_scroll.js"></script>
</body>

</html>