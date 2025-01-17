<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Typhoon Disaster Escape Room</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/typhoon.css') }}">
</head>
<body>
    <!-- Navbar -->
    {{-- <nav class="navbar navbar-expand-lg navbar-light bg-gray">
        <div class="container-fluid">
            <button class="btn btn-gray rounded" id="home-btn">Home </button>
        </div>
        
    </nav> --}}
    <div id="scenario-1-trigger" style="display: none;"></div>
    <!-- Main Container -->
    <div class="container mt-5" style="width: 100%; height: 100%; max-width: 1600px; padding: 0 50px;">
        <!-- Scenario 1 -->
        <div class="scenario-container" id="scenario-1">
            <div id="timer" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/newss.gif') }}" alt="scenario-1" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-1">
                <h2 class="mb-4">It’s a Sunday morning. You’re having breakfast with your family while watching the news.</h2>
                <h2 class="mb-4"> The news announces that heavy rains and very strong winds are expected; damage to houses and trees is possible. Winds of 89–117 km/h are expected within 18 hours. </h2>

                <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>


                <div class="choice-slider mt-4">
                    <div class="choice-images" id="choice-images">
                        <img class="choice-image" id="choice-1" src="{{ asset('assets/sig1.png') }}" alt="Signal 1">
                        <img class="choice-image" id="choice-2" src="{{ asset('assets/sig2.png') }}" alt="Signal 2">
                        <img class="choice-image" id="choice-3" src="{{ asset('assets/sig3.png') }}" alt="Signal 3">
                        <img class="choice-image" id="choice-4" src="{{ asset('assets/sig4.png') }}" alt="Signal 4">
                        <img class="choice-image" id="choice-5" src="{{ asset('assets/sig5.png') }}" alt="Signal 5">
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
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-2" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-2">
                <h2 class="mb-4">You open the kitchen cabinet and find 10 items. You need to pick 5 essential items to include in your emergency survival kit.
                </h2>
                <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>

                <div class="button-options mt-4" id = "scenario-2-choices">
                    <input type="checkbox" id="flashlight" name="flashlight" value="Flashlight" data-answer="Flashlight">
                    <label for="flashlight"> <img src="{{ asset('assets/flashlight.png') }}" alt=""> Flashlight</label><br>

                    <input type="checkbox" id="slippers" name="slippers" value="Slippers" data-answer="Slippers">
                    <label for="slippers"> <img src="{{ asset('assets/slippers.png') }}" alt=""> Slippers</label><br>

                    <input type="checkbox" id="extra-batteries" name="extra-batteries" value="Extra Batteries" data-answer="Extra batteries">
                    <label for="extra-batteries"><img src="{{ asset('assets/battery.png') }}" alt=""> Extra Batteries</label><br>

                    <input type="checkbox" id="first-aid-kit" name="first-aid-kit" value="First-aid Kit" data-answer="First-aid kit">
                    <label for="first-aid-kit"><img src="{{ asset('assets/first-aid-kit.png') }}" alt=""> First-aid Kit</label><br>
                   
                    <input type="checkbox" id="canned-goods" name="canned-goods" value="Canned goods" data-answer="Canned goods">
                    <label for="canned-goods"><img src="{{ asset('assets/canned-goods.png') }}" alt=""> Canned goods</label><br>

                    <input type="checkbox" id="deck-of-cards" name="deck-of-cards" value="Deck of Cards" data-answer="Deck of Cards">
                    <label for="deck-of-cards"><img src="{{ asset('assets/cards.png') }}" alt=""> Deck of Cards</label><br>

                    <input type="checkbox" id="blanket" name="blanket" value="Blanket" data-answer="Blanket">
                    <label for="blanket"><img src="{{ asset('assets/blanket.png') }}" alt=""> Blanket</label><br>

                    <input type="checkbox" id="pillow" name="pillow" value="Pillow" data-answer="Pillow">
                    <label for="pillow"><img src="{{ asset('assets/pillow.png') }}" alt=""> Pillow</label><br>

                    <input type="checkbox" id="teddy-bear" name="teddy-bear" value="Teddy Bear" data-answer="Teddy bear">
                    <label for="teddy-bear"><img src="{{ asset('assets/teddy-bear.png') }}" alt=""> Teddy Bear</label><br>

                    <input type="checkbox" id="bottled-water" name="bottled-water" value="Bottled Water" data-answer="Bottled water">
                    <label for="bottled-water"><img src="{{ asset('assets/water.png') }}" alt=""> Bottled Water</label><br>
                </div>
            
            </div>
        </div>

        <!-- Scenario 3 -->
        <div class="scenario-container" id="scenario-3" style="display: none;">
            <div id="timer-3" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/newss.gif') }}" alt="scenario-3" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-3">
                <h2 class="mb-4">You’re now in your bedroom. After preparing the family emergency bag, your mother asked you to  remember the emergency hotlines and agencies you would call during a typhoon.
                </h2>
                <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>
                </p>

                <div class="button-optionss mt-4" style="display: flex; flex-direction: column;">
                    <div style="margin: 70px;">
                    <button class="btn-options" data-answer="wrong" id="scenario3Choices" style="margin-right: 70px;"><img src="{{ asset('assets/16.png') }}" alt="" ></button>
                    <button class="btn-options" data-answer="wrong" id="scenario3Choices"><img src="{{ asset('assets/16.png') }}" alt="" ></button>
                </div>
                <div style="margin: 70px;">
                    <button class="btn-options" data-answer="correct" id="scenario3Choices" style="margin-right: 70px;"><img src="{{ asset('assets/16.png') }}" alt="" ></button>
                    <button class="btn-options" data-answer="wrong" id="scenario3Choices"><img src="{{ asset('assets/16.png') }}" alt="" ></button>
                </div>
                </div>
            </div>
        </div>

        <!-- Scenario 4 -->
        <div class="scenario-container" id="scenario-4" style="display: none;">
            <div id="timer-4" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-4" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-4">
                <h2 class="mb-4">Scenario 4: Now, you have the emergency hotlines and know the agencies you can call. You must keep your communication open.
                    </h2>
                    <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Wait for the typhoon to pass before checking your phone.</button>
                    <button class="btn-option" data-answer="correct">Make sure your phone is fully charged and has enough credit.</button>
                    <button class="btn-option" data-answer="wrong">Unplug your phone to prevent damage.</button>
                    <button class="btn-option" data-answer="wrong">Only check your phone once you hear the emergency sirens.</button>
                </div>
            </div>
        </div>

           <!-- Scenario 5 -->
        <div class="scenario-container" id="scenario-5" style="display: none;">
            <div id="timer-5" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-5" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-5">
                <h2 class="mb-4">Scenario 5: You’re in the living room preparing to evacuate with your family, but you notice water leaking from the ceiling. To prevent further damage, you need to select and use the correct tools from the items available.</h2>
                <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>
                <div>
                    1. Ladder <br> 2. Waterproof sealant <br> 3. Bucket

                </div>
                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">1-2-3</button>
                    <button class="btn-option" data-answer="wrong">3-2-1</button>
                    <button class="btn-option" data-answer="wrong">2-1-3</button>
                    <button class="btn-option" data-answer="correct">3-1-2</button>
                </div>
            </div>
        </div>

          <!-- Scenario 6 -->
          <div class="scenario-container" id="scenario-6" style="display: none;">
            <div id="timer-6" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-6" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-6">
                <h2 class="mb-4">Scenario 6: As you and your family
                    stay indoors, you hear a
                    knock on the front door.
                    The local government has
                    issued an order for your
                    family to evacuate
                    immediately due to the risk of flooding. Before
                    heading to the evacuation
                    center, you need to ensure
                    your house is ready to be
                    left behind.
                    </h2>
                    <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Leave the doors unlocked for easier access when you return.</button>
                    <button class="btn-option" data-answer="wrong">Open all windows to let air circulate.</button>
                    <button class="btn-option" data-answer="correct">Turn off all electrical appliances and the main power switch. Lock all doors.</button>
                    <button class="btn-option" data-answer="wrong">Secure important documents and valuables in a paper envelope.</button>
                </div>
            </div>
        </div>

          <!-- Scenario 7 -->
          <div class="scenario-container" id="scenario-7" style="display: none;">
            <div id="timer-7" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-5" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-7">
                <h2 class="mb-4">Scenario 7: You and your family have
                    arrived at the evacuation
                    center to stay safe from
                    the typhoon and flooding.
                    To ensure everyone's
                    comfort and safety, you
                    need to understand the
                    basic rules and procedures
                    while staying in the
                    evacuation center</h2>
                    <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="wrong">Find a comfortable spot and rest immediately.</button>
                    <button class="btn-option" data-answer="correct">Help register your family with the evacuation center authorities.</button>
                    <button class="btn-option" data-answer="wrong">Take food and supplies without asking.</button>
                    <button class="btn-option" data-answer="wrong">Start mingling with other evacuees to make friends.</button>
                </div>
            </div>
        </div>

          <!-- Scenario 8 -->
          <div class="scenario-container" id="scenario-8" style="display: none;">
            <div id="timer-8" class="timer-position">00:00</div>
            {{-- <div class="scenario-image">
                <img src="{{ asset('assets/news.gif') }}" alt="scenario-8" class="img-fluid">
            </div> --}}
            <div class="scenario-content" id="scenario-content-8">
                <h2 class="mb-4">Scenario 8: The typhoon is over, and
                    you’re about to step
                    outside.</h2>
                    <p class="typewriter"><span class="animation">{{ $scenario1->question }}</span></p>

                <div class="button-options mt-4">
                    <button class="btn-option" data-answer="correct">Stay away from fallen trees, wrecked cars, and debris.</button>
                    <button class="btn-option" data-answer="wrong">Walk through the debris to see if you can help others.</button>
                    <button class="btn-option" data-answer="wrong">Climb over the fallen tree to get a better view</button>
                    <button class="btn-option" data-answer="wrong">Pick up the debris and move it to clear the road.</button>
                </div>
            </div>
        </div>
    
        <!-- Popup -->
        <div id="popup" class="popup">
            <p id="popup-message"></p>
            
        </div>
    </div>
    <script>
           const userId = {{ session('logged_in_user_id') }};
      </script>


    <script src="https://cdn.jsdelivr.net/npm/axios@0.27.2/dist/axios.min.js"></script>
    <script src="{{ asset('js/typhoon.js') }}"></script>
</body>
</html>