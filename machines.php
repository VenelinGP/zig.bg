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
    <section class="relative min-h-[70vh] flex items-center justify-center overflow-hidden pt-20">
        <div class="absolute inset-0">
            <img alt="CNC-machining-military" class="w-full h-full object-cover scale-105"
                src="images/CNC-machining-military-1024x683.jpg" />
            <div class="absolute inset-0 hero-overlay">
            </div>
        </div>
        <div class="relative z-10 text-center px-6 max-w-5xl">
            <h1 class="text-5xl md:text-8xl font-display font-extrabold text-white mb-6 leading-[1.1] tracking-tight">
                МАШИНИ<br />
                <span class="gradient-text">И ОБОРУДВАНЕ</span>
            </h1>
            <p class="text-slate-300 text-lg md:text-xl max-w-2xl mx-auto mb-12 font-light leading-relaxed">

            </p>
        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">Rottler F79A</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Windows Touch
                            Screen операционна система – Rottler използва технологията за докосване на екрана на Windows
                            на 19″ сензорен панел. Софтуерът на Windows има много предимства като обикновен
                            потребителски интерфейс, който е лесен за учене и бърз за работа.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Интернет поддръжка
                            и свързаност – Rottler предлага интернет поддръжка и видео конференции директно от вашата
                            машина до фабриката. Тази функция ви дава незабавен директен контакт с Rottler, без да
                            правите телефонен разговор. Skype и уеб камера са предварително инсталирани, така че
                            техниците в Rottler виждат това, което виждате. Това спестява огромно количество време за
                            обучение и отстраняване на проблеми. В работилницата е прекалено шумно? Skype ви предоставя
                            възможности за съобщения с техниците на Rottler.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Автоматичен сменяч
                            на инструменти – автоматична система за смяна на инструменти, достъпна за производствени
                            приложения за обработка.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Движеща се
                            конструкция на колоната – Позволява работа със стационарният обект с повишена
                            точност.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Допълнителен
                            капацитет на височина – Лесно се справя със средни по размер дизелови блокове.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Големи пътища с
                            покритие от турсит – Тунели с турситово покритие за понижено триене, по-дълъг живот и
                            по-добра точност.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Изключително дълъг
                            T-слот – Работна маса за двойни работни станции и увеличена универсалност</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Световен стандарт
                            CAT40 шпиндел – За бърза смяна на инструмента и гъвкавост в световен мащаб.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Плъзгащ дизайн на
                            шпиндела – За обработка на дълбоки отвори, необходима за работа в блок.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Серво мотори –
                            Предлагт максимален въртящ момент и производителност в целия диапазон RPM за пецизност и
                            увеличаване на производителността.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Единична фаза
                            208-240V – За енергийна ефективност, която спестява разходи за електричество.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Автоматизирана
                            система за наклоняване на работната глава – осигурява по-добра повърхностна
                            обработка.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Екстремна Т-слот
                            Работна маса – за двойни работни станции и големи блокове за повишена гъвкавост.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Плъзгащи винтове с
                            директно задвижване – Предоставяйте дълъг живот без проблеми и прецизно движение.</span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="Rottler F79A" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/F79A_6_Feb2012_3.jpg" />
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="CONTOUR-BB 2012 EN" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/CONTOUR-BB 2012 EN.png" />
                </div>
            </div>
            <div class="relative">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">
                    Newen – CONTOUR-BB</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Специализирана
                            машината за обработка на клапанните гнезда на цилиндрови глави, с диаметър от 13.5милиметра
                            до 100 мм + (0.53 “- 3.94” +) от всички видове материали ( за двигатели на LNG, LPG,
                            N2O).</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">CONTOUR-BB™ е
                            уникална и надеждна, разполага с цифрова система за управление което повишава гъвкавостта и
                            на употреба, и намалява времето за обработката на клапаните гнезда на цилиндровата
                            глава.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Възможността за
                            програмиране на цифровият модул на машината позволява да се извършват операции със специални
                            изисквания за форма на клапанното гнездо при тунинговани/спортни двигател.</span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">При обработката се
                            използва богат набор от режещи инструменти – карбид, метало-керамика, диамант.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">SERDI 4.0 Power</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">SERDI 4.0 Power е
                            най-гъвкавата машина с пневматично и хидравлично затягане на работната глава за най-добра
                            устойчивост по време на работа. Заради нейната самостоятелно центрирана системата на тройна
                            въздушна възглавница, центрирането е с несравнима точност и лекота, по-лесно от всички други
                            машини на пазара. Сравнена с автоматичните машини, тези ръчно управлявани SERDI машини са
                            лесни за употреба за всички оператори и не изискват трудна и скъпоструваща профилактика.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="serdi-4-0-power" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/serdi-4-0-power_new.jpg" />
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="SERDI 3.0" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/serdi-3-0.jpg" />
                </div>
            </div>
            <div class="relative">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">
                    SERDI 3.0</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">SERDI 3.0 е с
                            характеристиките на по-големият си брат 4,0 с насоченост към средни и малки диаметри. Тя
                            постига отлични нива на балансираност, дори в употреба с малки размери като 0.120 “/ 3mm.
                            Комбинацията от тези машина 4,0 и 3,0 покрива целият пазарен сегмент от работа.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">SERDI 1501</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">SERDI 1501
                            позволява лесни и ефективни тестове под налягане на цилиндровата глава и цилиндровия блок за
                            наличието на пукнатини или нарушения в охладителната система.Тестът обхваща температурният
                            диапазон от 20 до 60 градуса по Целзии. Препоръчано от Caterpillar.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="SERDI 1501" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/SPT1501 250.jpg" />
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="ARB 651" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/Berco AB651 - биели.jpg" />
                </div>
            </div>
            <div class="relative">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">
                    ARB 651 Разтъргване и калибриране на биели</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">ARB 651 е специално
                            проектиран за комплексна обработка на биели (мотовилки) – голяма, малка глава и калибриране
                            на биелни втулки. Машината е универсална и специфична по своята схема на работа, което я
                            прави особенно ценна при ремонта на двигатели с вътрешно горене.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">BT 6 хоризонтално
                    разтъргваща машина</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Разтъргваща машина
                            BT 6 е малка на размер бор щанга , която има широк спектър на приложение.
                            Въпреки, че е специално предназначена за възстановяване на леглата на разпредилителният вал
                            в цилиндровата глава, тя също може да се използва за възстановяване на лагерните гнезда на
                            коляновия вал на цилиндровия блок в автомобилте.
                            Машината е здрава и компактна и дава възможност за прецизна обработка.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="BT 6" class="w-full h-full object-cover grayscale opacity-80" src="images/BT6.jpg" />
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="RTM 270" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/rtm-270-300x121.jpg" />
                </div>
            </div>
            <div class="relative">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">
                    RTM 270 Шлайф колянов вал</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Шлайф машина RTM
                            270 е много гъвкава, което позволява да се получи висока прецизност при шлайфане на колянов
                            вал.
                            Тези машини обхваща широк диапазон на двигатели от малки едноцилиндрови до големи с размер
                            на вала до 1600 mm. и тегло до 160кг.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">STC 361</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">STC 361 са
                            хидравлични шлайфащи машини за малки и средни на големина цилиндрови глави и цилиндрови
                            блокове с максимална дължина до 1300mm.
                        </span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">STC 361 са
                            хидравлични шлайфащи и фрезоващи машини за средни и големи размери цилиндрови глави и
                            блокове.
                        </span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Тези машини са
                            точни и гъвкави: те дават възможност за решаване на всички шлифовъчни проблеми по оптимален
                            и икономичен начин.
                        </span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">STC 361 машина се
                            характеризира с автоматично променливо движение на масата, което е хидравлично контролирано;
                            главата се управлява от един от главните двигатели, който директно контролира шлайф колянния
                            вал и чрез допълнителен двигател на контрол на ножа.
                        </span>
                    </li>
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Тези машини дават
                            възможност за 3 различни метода на обработка: с шлайф камбана с 10 абразивни елемента, финно
                            фрезоване е единичен инструмент за рязане (ЦМБ) или с фрезова глва 340mm.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="STC 361" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/STC361.jpg" />
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="CM-1800" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/CM-1800V.jpg" />
                </div>
            </div>
            <div class="relative">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">
                    AMC-SCHOU 1800</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">AMC-SCHOU 1800 е
                            машина за разтъргване и фрезоване на цилиндров блок и корегиране / възстановяване стъпките
                            на цилиндровире ризи/втулкли до 350 mm (13,75 “). Машината е проектирана и изработена с
                            масивна конструкция от висококачествени материали за гарантиране на високо качество на
                            работа. Оборудвана е с автоматично централно смазване.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">DIMET 405 RE</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Прахово-газово
                            динамично напластяване чрез оборудване Диметил-405 РЕ. Уредът е предназначен за напластяване
                            на алуминий, мед, цинк, никел и цинкоалуминиевомедна сплав върху разнородни материали и
                            сплави. Датайлите подложени на този вид напластяване не се подлагат на предварителна
                            температурна и/или специална механична обработка.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="DIMET 405" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/dimet_405.jpg" />
                </div>
            </div>
        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="ESAB Tig 3000" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/3000-230x300.jpg" />
                </div>
            </div>
            <div class="relative">
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">
                    ESAB Tig 3000i AC/DC</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Висококачаственни
                            аргонови заварки чрез ЕСАБ 3000i AC/DC заваръчен уред. Проектирана за висококачествено Tig
                            заваряване на алиминий, алуминиеви сплави, магнезияви сплави, нераждаема стомана, мека
                            стомана, чугун и медни сплави. Зашаса на мощност на уреда позволява плавно и равномерно
                            завареване както на малки така и на големи детайли.</span>
                    </li>
                </ul>
            </div>

        </div>
    </section>
    <section class="py-24 px-6 relative overflow-hidden">
        <div class="absolute top-0 right-0 w-[500px] h-[500px] bg-primary/5 blur-[120px] rounded-full"></div>
        <div class="absolute bottom-0 left-0 w-[500px] h-[500px] bg-accent-blue/5 blur-[120px] rounded-full"></div>
        <div class="max-w-7xl mx-auto grid grid-cols-1 lg:grid-cols-2 gap-20 items-center">
            <div>
                <h2 class="text-4xl md:text-5xl font-display font-extrabold mb-8 tracking-tight">Sunen P-180 Honall</h2>
                <ul class="space-y-4 mb-10">
                    <li class="flex items-start gap-3 group/item">
                        <span class="material-symbols-outlined text-primary text-xl">check_circle</span>
                        <span class="text-slate-400 group-hover/item:text-primary transition-colors">Sunnen P-180 Head &
                            Driver Set е предназначена за оразмеряване и обработване на капанните водачи в цилиндровите
                            глави. Той използва дорници и камъни, използвани в Sunnen Хонинг Машини.
                        </span>
                    </li>
                </ul>
            </div>
            <div class="relative">
                <div class="aspect-square rounded-3xl overflow-hidden border border-white/10 shadow-glass">
                    <img alt="Sunnen P-180" class="w-full h-full object-cover grayscale opacity-80"
                        src="images/P180-img.jpg" />
                </div>
            </div>
        </div>
    </section>
    <?php include 'footer.html'; ?> <script src="js/header_scroll.js">
    </script>
</body>

</html>