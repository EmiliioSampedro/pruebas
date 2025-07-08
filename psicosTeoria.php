<?php
get_header();
/*Template Name: memoria Psicos*/
$memberID = get_current_user_id();
comprobar_usuario ($memberID);
?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary: #3a7bd5;
            --secondary: #00d2ff;
            --accent: #ff6b6b;
            --dark: #1a2a6c;
            --light: #f0f7ff;
            --success: #4CAF50;
            --warning: #FFC107;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #1a2a6c, #b21f1f, #1a2a6c);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 20px;
            color: #333;
        }
        
        header {
            text-align: center;
            margin: 20px 0;
            width: 100%;
            max-width: 1000px;
        }
        
        h1 {
            font-size: 2.8rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 15px;
        }
        
        .subtitle {
            font-size: 1.3rem;
            color: white;
            opacity: 0.9;
            max-width: 800px;
            margin: 0 auto 30px;
        }
        
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 25px;
            max-width: 1200px;
            margin: 0 auto;
            justify-content: center;
        }
        
        .card {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            overflow: hidden;
            transition: transform 0.3s;
            flex: 1;
            min-width: 300px;
            max-width: 500px;
        }
        
        .card:hover {
            transform: translateY(-10px);
        }
        
        .card-header {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            padding: 20px;
            text-align: center;
            position: relative;
        }
        
        .card-header h2 {
            font-size: 1.8rem;
            margin-bottom: 10px;
        }
        
        .card-header i {
            font-size: 2.5rem;
            margin-bottom: 15px;
            display: block;
        }
        
        .card-content {
            padding: 25px;
        }
        
        .card-content h3 {
            color: var(--primary);
            margin-bottom: 15px;
            font-size: 1.4rem;
            border-bottom: 2px solid var(--light);
            padding-bottom: 8px;
        }
        
        .card-content ul {
            padding-left: 20px;
            margin: 15px 0;
        }
        
        .card-content li {
            margin-bottom: 12px;
            line-height: 1.5;
        }
        
        .card-content li strong {
            color: var(--dark);
        }
        
        .technique {
            display: flex;
            align-items: flex-start;
            margin-bottom: 20px;
            padding: 15px;
            background: var(--light);
            border-radius: 10px;
        }
        
        .technique-icon {
            background: var(--primary);
            color: white;
            width: 50px;
            height: 50px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 1.5rem;
            margin-right: 15px;
            flex-shrink: 0;
        }
        
        .technique-content {
            flex: 1;
        }
        
        .practice-section {
            background: white;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.25);
            padding: 30px;
            margin: 30px auto;
            max-width: 1000px;
            width: 100%;
        }
        
        .practice-header {
            text-align: center;
            margin-bottom: 30px;
        }
        
        .practice-header h2 {
            font-size: 2.2rem;
            color: white;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            margin-bottom: 15px;
        }
        
        .practice-container {
            background: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            padding: 30px;
            margin-bottom: 30px;
        }
        
        .timer {
            background: var(--accent);
            color: white;
            font-size: 2rem;
            font-weight: bold;
            width: 100px;
            height: 100px;
            border-radius: 50%;
            display: flex;
            justify-content: center;
            align-items: center;
            margin: 0 auto 30px;
            box-shadow: 0 0 20px rgba(255, 107, 107, 0.7);
        }
        
        .content-container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            margin: 30px 0;
        }
        
        .image-container, .text-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            padding: 20px;
            flex: 1;
            min-width: 300px;
        }
        
        .image-container {
            text-align: center;
        }
        
        .image-container img {
            max-width: 100%;
            border-radius: 10px;
            max-height: 300px;
            object-fit: cover;
            border: 3px solid var(--light);
        }
        
        .text-container h3, .image-container h3 {
            color: var(--primary);
            margin-bottom: 15px;
            text-align: center;
        }
        
        .memorization-text {
            font-size: 1.1rem;
            line-height: 1.7;
            text-align: justify;
            padding: 15px;
            background-color: #f9f9ff;
            border-radius: 10px;
            border-left: 4px solid var(--primary);
        }
        
        .btn {
            background: linear-gradient(to right, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 15px 35px;
            font-size: 1.1rem;
            border-radius: 50px;
            cursor: pointer;
            display: block;
            margin: 30px auto;
            transition: all 0.3s;
            box-shadow: 0 5px 15px rgba(58, 123, 213, 0.4);
        }
        
        .btn:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(58, 123, 213, 0.6);
        }
        
        .btn:active {
            transform: translateY(1px);
        }
        
        .btn-restart {
            background: linear-gradient(to right, var(--accent), #ff8e53);
        }
        
        .progress-bar {
            height: 10px;
            background-color: #e0e0e0;
            border-radius: 5px;
            margin: 20px 0;
            overflow: hidden;
        }
        
        .progress {
            height: 100%;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            width: 0%;
            transition: width 0.5s;
        }
        
        .tip-box {
            background: linear-gradient(to right, var(--warning), #ffeb3b);
            padding: 20px;
            border-radius: 15px;
            margin: 25px 0;
            color: #333;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }
        
        .tip-box h3 {
            color: #b06c00;
            margin-bottom: 10px;
            display: flex;
            align-items: center;
        }
        
        .tip-box h3 i {
            margin-right: 10px;
        }
        
        .phase {
            display: none;
        }
        
        .active {
            display: block;
        }
        
        @media (max-width: 768px) {
            .content-container {
                flex-direction: column;
            }
            
            h1 {
                font-size: 2rem;
            }
        }
    </style>

    <header>
        <h1><i class="fas fa-brain"></i> Preparación para Tests de Memoria</h1>
        <p class="subtitle">Técnicas, estrategias y ejercicios prácticos para mejorar tu memoria visual y textual</p>
    </header>
    
    <div class="container">
        <!-- Card 1: Técnicas de Memorización -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-lightbulb"></i>
                <h2>Técnicas de Memorización</h2>
            </div>
            <div class="card-content">
                <h3>Métodos Efectivos</h3>
                
                <div class="technique">
                    <div class="technique-icon">
                        <i class="fas fa-search"></i>
                    </div>
                    <div class="technique-content">
                        <h4>Identificar Información Clave</h4>
                        <p>Enfócate en elementos esenciales: nombres, números, colores, ubicaciones, relaciones espaciales y detalles únicos.</p>
                    </div>
                </div>
                
                <div class="technique">
                    <div class="technique-icon">
                        <i class="fas fa-sitemap"></i>
                    </div>
                    <div class="technique-content">
                        <h4>Agrupamiento (Chunking)</h4>
                        <p>Agrupa información en categorías lógicas. Por ejemplo, en una imagen: personas, objetos, entorno, texto visible.</p>
                    </div>
                </div>
                
                <div class="technique">
                    <div class="technique-icon">
                        <i class="fas fa-route"></i>
                    </div>
                    <div class="technique-content">
                        <h4>Método de Loci (Palacio Mental)</h4>
                        <p>Asocia elementos con lugares en un recorrido mental familiar, como tu casa o camino al trabajo.</p>
                    </div>
                </div>
                
                <div class="technique">
                    <div class="technique-icon">
                        <i class="fas fa-link"></i>
                    </div>
                    <div class="technique-content">
                        <h4>Asociación y Conexiones</h4>
                        <p>Crea historias o conexiones entre elementos. Cuanto más absurda o vívida sea la asociación, mejor se recordará.</p>
                    </div>
                </div>
                
                <div class="technique">
                    <div class="technique-icon">
                        <i class="fas fa-eye"></i>
                    </div>
                    <div class="technique-content">
                        <h4>Escaneo Sistemático</h4>
                        <p>Divide la imagen/texto en secciones (ej: cuadrantes) y examina cada sección metódicamente.</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Card 2: Estrategias para el Test -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-tasks"></i>
                <h2>Estrategias para el Test</h2>
            </div>
            <div class="card-content">
                <h3>Durante el Ejercicio</h3>
                <ul>
                    <li><strong>Gestión del tiempo:</strong> Dedica los primeros segundos a explorar todo antes de enfocarte en detalles.</li>
                    <li><strong>Priorización:</strong> Concéntrate en elementos que probablemente serán preguntados (nombres, números, colores).</li>
                    <li><strong>Repaso mental:</strong> En los últimos segundos, repasa mentalmente los puntos clave.</li>
                    <li><strong>Control de ansiedad:</strong> Practica técnicas de respiración para mantener la calma durante el test.</li>
                </ul>
                
                <h3>Al Responder Preguntas</h3>
                <ul>
                    <li>Confía en tu primera impresión si no estás seguro</li>
                    <li>Descarta opciones claramente incorrectas primero</li>
                    <li>Si tienes dudas entre dos opciones, elige la más detallada</li>
                    <li>Presta atención a palabras absolutas como "siempre", "nunca", "todos"</li>
                </ul>
                
                <div class="tip-box">
                    <h3><i class="fas fa-bolt"></i> Consejo Rápido</h3>
                    <p>Durante la fase de memorización, murmura para ti mismo describiendo lo que ves. El refuerzo verbal mejora la retención.</p>
                </div>
            </div>
        </div>
        
        <!-- Card 3: Preparación a Largo Plazo -->
        <div class="card">
            <div class="card-header">
                <i class="fas fa-chart-line"></i>
                <h2>Preparación a Largo Plazo</h2>
            </div>
            <div class="card-content">
                <h3>Entrenamiento Diario</h3>
                <ul>
                    <li><strong>Ejercicios diarios:</strong> Dedica 10-15 minutos diarios a practicar con imágenes complejas o textos.</li>
                    <li><strong>Juegos mentales:</strong> Utiliza apps como Lumosity, Elevate o juegos de memoria tradicionales.</li>
                    <li><strong>Lectura activa:</strong> Al leer artículos, intenta recordar después los puntos principales.</li>
                    <li><strong>Observación consciente:</strong> En lugares públicos, observa escenas brevemente y luego recuerda detalles.</li>
                </ul>
                
                <h3>Estilo de Vida</h3>
                <ul>
                    <li><strong>Sueño adecuado:</strong> La consolidación de memorias ocurre durante el sueño profundo.</li>
                    <li><strong>Alimentación:</strong> Alimentos ricos en omega-3, antioxidantes y vitamina B apoyan la función cerebral.</li>
                    <li><strong>Ejercicio físico:</strong> Mejora el flujo sanguíneo al cerebro y promueve la neurogénesis.</li>
                    <li><strong>Meditación:</strong> Mejora la concentración y la memoria de trabajo.</li>
                </ul>
                
                <div class="tip-box">
                    <h3><i class="fas fa-flask"></i> Dato Científico</h3>
                    <p>Estudios demuestran que 20 minutos de meditación diaria pueden mejorar la memoria de trabajo en un 10-15% en 4 semanas.</p>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Sección de Práctica -->
    <div class="practice-section">
        <div class="practice-header">
            <h2><i class="fas fa-dumbbell"></i> Ejercicio Práctico</h2>
            <p class="subtitle">Entrena tu memoria con este simulador de test</p>
        </div>
        
        <div class="practice-container">
            <!-- Fase de Memorización -->
            <div id="memorization-phase" class="phase active">
                <div class="timer">30</div>
                
                <div class="content-container">
                    <div class="image-container">
                        <h3>Memoriza esta imagen</h3>
                        <img src="https://images.unsplash.com/photo-1543857778-c4a1a569e7bd?auto=format&fit=crop&w=600&h=400&q=80" alt="Escena para memorizar">
                    </div>
                    
                    <div class="text-container">
                        <h3>Memoriza este texto</h3>
                        <div class="memorization-text">
                            <p>La imagen muestra una escena urbana con una cafetería llamada "Café Aurora" en la esquina. Hay tres personas sentadas en la terraza: una mujer con sombrero rojo, un hombre leyendo un periódico y un niño con una bicicleta azul. En el fondo se ve un edificio amarillo con cinco ventanas y un reloj que marca las 10:15. En la acera hay un perro marrón atado a un poste de luz y un letrero que dice "Parque a 200m".</p>
                        </div>
                    </div>
                </div>
                
                <div class="progress-bar">
                    <div class="progress" id="memorization-progress"></div>
                </div>
                
                <button id="start-btn" class="btn">Comenzar Temporizador <i class="fas fa-play"></i></button>
            </div>
            
            <!-- Fase de Preguntas -->
            <div id="question-phase" class="phase">
                <h2 style="text-align: center; margin-bottom: 30px; color: var(--primary);">Preguntas sobre lo que memorizaste</h2>
                
                <div class="question">
                    <h3>1. ¿Cómo se llama la cafetería que aparece en la imagen?</h3>
                    <div class="options">
                        <div class="option" data-correct="true">Café Aurora</div>
                        <div class="option">Café Central</div>
                        <div class="option">Café del Sol</div>
                        <div class="option">Café Paris</div>
                    </div>
                </div>
                
                <div class="question">
                    <h3>2. ¿Cuántas personas hay en la terraza de la cafetería?</h3>
                    <div class="options">
                        <div class="option">2</div>
                        <div class="option" data-correct="true">3</div>
                        <div class="option">4</div>
                        <div class="option">5</div>
                    </div>
                </div>
                
                <div class="question">
                    <h3>3. ¿Qué está haciendo el hombre en la terraza?</h3>
                    <div class="options">
                        <div class="option">Hablando por teléfono</div>
                        <div class="option" data-correct="true">Leyendo un periódico</div>
                        <div class="option">Bebiendo café</div>
                        <div class="option">Escribiendo en un cuaderno</div>
                    </div>
                </div>
                
                <div class="question">
                    <h3>4. ¿De qué color es la bicicleta del niño?</h3>
                    <div class="options">
                        <div class="option">Rojo</div>
                        <div class="option">Verde</div>
                        <div class="option" data-correct="true">Azul</div>
                        <div class="option">Amarillo</div>
                    </div>
                </div>
                
                <div class="question">
                    <h3>5. ¿Qué dice el letrero en la acera?</h3>
                    <div class="options">
                        <div class="option">"Estación de tren"</div>
                        <div class="option" data-correct="true">"Parque a 200m"</div>
                        <div class="option">"Prohibido estacionar"</div>
                        <div class="option">"Calle cerrada"</div>
                    </div>
                </div>
                
                <button id="submit-btn" class="btn">Verificar Respuestas <i class="fas fa-check"></i></button>
            </div>
            
            <!-- Fase de Resultados -->
            <div id="result-phase" class="phase">
                <div class="results">
                    <h2 style="text-align: center; color: var(--primary); margin-bottom: 20px;">Resultados del Ejercicio</h2>
                    
                    <div style="text-align: center; margin: 30px 0;">
                        <div class="score" style="font-size: 3rem; font-weight: bold; color: var(--primary);">4/5</div>
                        <p style="font-size: 1.5rem; margin-bottom: 30px;">¡Buen trabajo! Sigue practicando</p>
                    </div>
                    
                    <div style="text-align: left; max-width: 600px; margin: 30px auto; background: var(--light); padding: 20px; border-radius: 15px;">
                        <h3 style="color: var(--primary); margin-bottom: 15px;">Retroalimentación:</h3>
                        <p><i class="fas fa-check" style="color: var(--success);"></i> Correcto: Identificaste el nombre del café</p>
                        <p><i class="fas fa-check" style="color: var(--success);"></i> Correcto: Contaste correctamente las personas</p>
                        <p><i class="fas fa-check" style="color: var(--success);"></i> Correcto: Supiste lo que hacía el hombre</p>
                        <p><i class="fas fa-check" style="color: var(--success);"></i> Correcto: Identificaste el color de la bicicleta</p>
                        <p><i class="fas fa-times" style="color: var(--accent);"></i> Incorrecto: El letrero decía "Parque a 200m"</p>
                    </div>
                    
                    <div class="tip-box" style="max-width: 600px; margin: 30px auto;">
                        <h3><i class="fas fa-graduation-cap"></i> Consejo de Mejora</h3>
                        <p>Para recordar detalles textuales como letreros, intenta convertirlos en imágenes mentales. Por ejemplo, imagina un parque a 200 metros con un gran cartel indicador.</p>
                    </div>
                    
                    <button id="restart-btn" class="btn btn-restart">Repetir Ejercicio <i class="fas fa-redo"></i></button>
                </div>
            </div>
        </div>
    </div>
    
    <script>
        // Variables globales
        let memorizationTime = 30;
        let timerInterval;
        let currentTime = memorizationTime;
        
        // Elementos DOM
        const memorizationPhase = document.getElementById('memorization-phase');
        const questionPhase = document.getElementById('question-phase');
        const resultPhase = document.getElementById('result-phase');
        const startBtn = document.getElementById('start-btn');
        const submitBtn = document.getElementById('submit-btn');
        const restartBtn = document.getElementById('restart-btn');
        const timerDisplay = document.querySelector('.timer');
        const progressBar = document.getElementById('memorization-progress');
        
        // Iniciar el temporizador
        startBtn.addEventListener('click', () => {
            startBtn.disabled = true;
            startBtn.textContent = "Temporizador en marcha...";
            
            startTimer();
        });
        
        // Función para iniciar el temporizador
        function startTimer() {
            currentTime = memorizationTime;
            timerDisplay.textContent = currentTime;
            
            timerInterval = setInterval(() => {
                currentTime--;
                timerDisplay.textContent = currentTime;
                
                // Actualizar barra de progreso
                const progressPercentage = ((memorizationTime - currentTime) / memorizationTime) * 100;
                progressBar.style.width = `${progressPercentage}%`;
                
                if (currentTime <= 0) {
                    clearInterval(timerInterval);
                    endMemorizationPhase();
                }
            }, 1000);
        }
        
        // Finalizar fase de memorización
        function endMemorizationPhase() {
            memorizationPhase.classList.remove('active');
            questionPhase.classList.add('active');
            
            // Configurar selección de respuestas
            setupAnswerSelection();
        }
        
        // Configurar selección de respuestas
        function setupAnswerSelection() {
            const options = document.querySelectorAll('.option');
            options.forEach(option => {
                option.addEventListener('click', function() {
                    // Deseleccionar otras opciones en la misma pregunta
                    const parent = this.parentElement;
                    const siblings = parent.querySelectorAll('.option');
                    siblings.forEach(sib => sib.classList.remove('selected'));
                    
                    // Seleccionar esta opción
                    this.classList.add('selected');
                });
            });
        }
        
        // Enviar respuestas
        submitBtn.addEventListener('click', () => {
            questionPhase.classList.remove('active');
            resultPhase.classList.add('active');
        });
        
        // Reiniciar ejercicio
        restartBtn.addEventListener('click', () => {
            // Resetear selecciones
            const selectedOptions = document.querySelectorAll('.option.selected');
            selectedOptions.forEach(option => option.classList.remove('selected'));
            
            // Resetear barra de progreso
            progressBar.style.width = '0%';
            
            // Resetear botón
            startBtn.disabled = false;
            startBtn.textContent = "Comenzar Temporizador";
            
            // Volver a fase de memorización
            resultPhase.classList.remove('active');
            memorizationPhase.classList.add('active');
        });
    </script>
<?php get_footer(); ?>