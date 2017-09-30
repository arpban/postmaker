<!DOCTYPE html>
<html>
    <head>
        <title>Postmaker</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="fonts/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="css/app.css">
    </head>
    <body>
        <div id="app">
            <Navbar></Navbar>
            <Sidebar></Sidebar>
            <div class="main">
                <div class="page intro" v-bind:class="{ open: pages.introPage }">
                    <div class="content">
                        <div class="body">
                            <h1>The Postmaker</h1>
                            <h2>Manage all your social media in one place.</h2>
                            <button class="btn2 get-started">Get Started. It's Free</button>
                        </div>
                        <img src="img/dot-map4.png">
                    </div>
                </div>
                <div class="page editor" v-bind:class="{ open: pages.editorPage }">
                    <div class="content">
                        <header>Main Editor</header>
                        <div class="container-fluid no-padding">
                            <div class="row">
                                <div class="col-xs-12 col-md-8">
                                    <textarea placeholder="Write Here" class="form-control"></textarea>
                                    <div class="sub-row">
                                        <button class="btn1">Add Images</button>
                                    </div>
                                </div>
                                <div class="col-xs-12 col-md-4"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page facebook">
                    <div class="content">
                        <header>Facebook</header>
                        <div class="ask-dialog">
                            <p>Do you want to share this post on Facebook ?</p>
                            <div class="buttons">
                                <button class="btn1" id="yes">Yes</button>
                                <button class="btn1" id="no">No</button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="page twitter">
                    <div class="content">
                        <header>Twitter</header>
                    </div>
                </div>
            </div>
        </div>
        <!-- <script src="https://cloud.tinymce.com/stable/tinymce.min.js?apiKey=q4cugenqet4hvgkulfpgcv6y006wis0jp14o67rvpbhj6iuc"></script> -->
        <script src="js/app.js"></script>
    </body>
</html>