<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Typhoon Disaster Escape Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/typhoon.css') }}">
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-light bg-gray">
        <div class="container-fluid">
            <button class="btn btn-gray rounded" id="home-btn">Home</button>
        </div>
    </nav>

    <!-- Main Container -->
    <div class="container mt-5" style="width: 100%; height: 100%; max-width: 1600px; padding: 0 30px;">
        <!-- Scenario 1 -->
        <div class="scenario-container" id="scenario-1">
            <div id="timer" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/newss.gif') }}" alt="scenario-1" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-1">
                <h2 class="mb-4">It’s a Sunday morning. You’re having breakfast with your family while watching the news.</h2>
                <h2 class="mb-4"> The news announces that heavy rains and very strong winds are expected; damage to houses and trees is possible. Winds of 89–117 km/h are expected within 18 hours. </h2>

                <p class="typewriter">What typhoon signal number does this represent?</p>


                <div class="choice-slider mt-4">
                    <div class="choice-images" id="choice-images">
                        <img class="choice-image" id="choice-1" src="assets/sig1.jpg" alt="Signal 1">
                        <img class="choice-image" id="choice-2" src="assets/sig2.jpg" alt="Signal 2">
                        <img class="choice-image" id="choice-3" src="assets/sig3.jpg" alt="Signal 3">
                        <img class="choice-image" id="choice-4" src="assets/sig4.jpg" alt="Signal 4">
                        <img class="choice-image" id="choice-5" src="assets/sig5.jpg" alt="Signal 5">
                    </div>
                </div>

                <input type="range" id="slider" min="1" max="5" value="1" class="form-range">
                <div class="slider-labels">
                    <span>1</span>
                    <span>2</span>
                    <span>3</span>
                    <span>4</span>
                    <span>5</span>
                </div>

                <button id="submit-btn" class="btn btn-primary mt-3">Submit</button>
            </div>
        </div>

        <!-- Scenario 2 -->
        <div class="scenario-container" id="scenario-2" style="display: none;">
            <div id="timer-2" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-2" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-2">
                <h2 class="mb-4">You open the kitchen cabinet and find 10 items. You need to pick 5 essential items to include in your emergency survival kit.
                </h2>
                <p class="typewriter">Which 5 items will you choose for your emergency bag?</p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Stay indoors</button>
                    <button class="btn-option" data-answer="wrong">Go to the market</button>
                    <button class="btn-option" data-answer="correct">Go to an evacuation center</button>
                    <button class="btn-option" data-answer="wrong">Stay at the beach</button>
                   
                </div>
            </div>
        </div>

        <!-- Scenario 3 -->
        <div class="scenario-container" id="scenario-3" style="display: none;">
            <div id="timer-3" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/newss.gif') }}" alt="scenario-3" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-3">
                <h2 class="mb-4">You’re now in your bedroom. After preparing the family emergency bag, your mother asked you to  remember the emergency hotlines and agencies you would call during a typhoon.
                </h2>
                <p class="typewriter">Which government agency should you NOT call in case of an emergency? 

                </p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Philippine Red Cross</button>
                    <button class="btn-option" data-answer="wrong">Philippine Coast Guard</button>
                    <button class="btn-option" data-answer="correct">Department of Transportation</button>
                    <button class="btn-option" data-answer="wrong">NDRRMC</button>
                </div>
            </div>
        </div>

        <!-- Scenario 4 -->
        <div class="scenario-container" id="scenario-4" style="display: none;">
            <div id="timer-4" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-4" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-4">
                <h2 class="mb-4">Scenario 4: Typhoon Worsens</h2>
                <p class="typewriter">What should you do if the typhoon worsens and you're at the evacuation center?</p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="correct">Move to a stronger building</button>
                    <button class="btn-option" data-answer="wrong">Stay in the current building</button>
                    <button class="btn-option" data-answer="wrong">Go outside to check the wind</button>
                    <button class="btn-option" data-answer="wrong">Ignore the situation</button>
                </div>
            </div>
        </div>

           <!-- Scenario 5 -->
        <div class="scenario-container" id="scenario-5" style="display: none;">
            <div id="timer-5" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-5" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-5">
                <h2 class="mb-4">Scenario 5: Typhoon Worsens</h2>
                <p class="typewriter">What should you do if the typhoon worsens and you're at the evacuation center?</p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="correct">Move to a stronger building</button>
                    <button class="btn-option" data-answer="wrong">Stay in the current building</button>
                    <button class="btn-option" data-answer="wrong">Go outside to check the wind</button>
                    <button class="btn-option" data-answer="wrong">Ignore the situation</button>
                </div>
            </div>
        </div>

          <!-- Scenario 6 -->
          <div class="scenario-container" id="scenario-6" style="display: none;">
            <div id="timer-6" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-6" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-6">
                <h2 class="mb-4">Scenario 6: Typhoon Worsens</h2>
                <p class="typewriter">What should you do if the typhoon worsens and you're at the evacuation center?</p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="correct">Move to a stronger building</button>
                    <button class="btn-option" data-answer="wrong">Stay in the current building</button>
                    <button class="btn-option" data-answer="wrong">Go outside to check the wind</button>
                    <button class="btn-option" data-answer="wrong">Ignore the situation</button>
                </div>
            </div>
        </div>

          <!-- Scenario 7 -->
          <div class="scenario-container" id="scenario-7" style="display: none;">
            <div id="timer-7" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-5" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-7">
                <h2 class="mb-4">Scenario 7: Typhoon Worsens</h2>
                <p class="typewriter">What should you do if the typhoon worsens and you're at the evacuation center?</p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="correct">Move to a stronger building</button>
                    <button class="btn-option" data-answer="wrong">Stay in the current building</button>
                    <button class="btn-option" data-answer="wrong">Go outside to check the wind</button>
                    <button class="btn-option" data-answer="wrong">Ignore the situation</button>
                </div>
            </div>
        </div>

          <!-- Scenario 8 -->
          <div class="scenario-container" id="scenario-8" style="display: none;">
            <div id="timer-8" class="timer-position">00:00</div>
            <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-8" class="img-fluid">
            </div>
            <div class="scenario-content" id="scenario-content-8">
                <h2 class="mb-4">Scenario 8: Typhoon Worsens</h2>
                <p class="typewriter">What should you do if the typhoon worsens and you're at the evacuation center?</p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="correct">Move to a stronger building</button>
                    <button class="btn-option" data-answer="wrong">Stay in the current building</button>
                    <button class="btn-option" data-answer="wrong">Go outside to check the wind</button>
                    <button class="btn-option" data-answer="wrong">Ignore the situation</button>
                </div>
            </div>
        </div>

        <!-- Popup -->
        <div id="popup" class="popup">
            <p id="popup-message"></p>
            
        </div>
    </div>

    <script src="{{ asset('js/typhoon.js') }}"></script>
</body>
</html>