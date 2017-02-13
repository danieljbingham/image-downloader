<!DOCTYPE html>
<html>
    <head>
        <title>Image Searcher</title>
        <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/easy-autocomplete.min.css" />
    </head>
    <body>
        <a hidden></a>
        <div class="container">
            <div class="jumbotron">
                <div class="form-group">
                    <div class="form-inline">
                        <div class="form-group">
                            <input type="text" name="" id="player-autocomplete" class="form-control" placeholder="Search player..." />
                        </div>
                        <div class="form-group">
                            <input type="number" name="" id="card-amount" class="form-control" value="1" min="1" max="50" placeholder="Special card amount (including monthly rewards)..." />
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="base-id" class="form-control" placeholder="Base ID" disabled/>
                        </div>
                        <div class="form-group">
                            <input type="text" name="" id="final-id" class="form-control" placeholder="Final ID" disabled/>
                        </div>
                        <div class="form-group">
                            <input type="button" id="link-image" value="Open image" class="btn btn-warning"/>
                        </div>
                        <div class="form-group">
                            <input type="button" id="add-player" value="Add player" class="btn btn-success"/>
                        </div>
                    </div>
                </div>
                
                <div class="row" id="added-players">
                    
                </div>
                
                <div class="form-group">
                    <input type="button" value="Download images" class="btn btn-primary" onclick="downloadPlayers();"/>
                </div>
            </div>
        </div>
        <!-- jQuery CDN -->
        <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/easy-autocomplete/1.3.5/jquery.easy-autocomplete.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jszip-utils/0.0.2/jszip-utils.min.js"></script>
        <script type="text/javascript" src="js/autocomplete.js"></script>
    </body>
</html>