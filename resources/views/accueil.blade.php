<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="{{ URL::asset('css/accueil.css') }}" rel="stylesheet">
    <title>Accueil - YDrunk</title>
</head>
<body>
    <main class="scroll1">
      <header>
        
        <div class="header-left">
          <div class="header-row">
            <div class=header-row-center>
            </div>
            <div class="header-row-bottom">
            </div>
          </div>
        </div>
        <div class="header-right">
          <div class="header-img-wrapper">
            <div class="header-title-wrapper">
              <h1>YDrunk</h1>
            </div>
            <div class="header-img-overlay"></div>
            <div class="player-button-wrapper">
              <a href='{{route('admin.dashboard')}}'class='play-but'>
                <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:a="http://ns.adobe.com/AdobeSVGViewerExtensions/3.0/" x="0px" y="0px" width="213.7px" height="213.7px" viewBox="0 0 213.7 213.7" enable-background="new 0 0 213.7 213.7" xml:space="preserve">
                <polygon class='triangle' id="XMLID_18_" fill="none" stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" points="
          73.5,62.5 148.5,105.8 73.5,149.1 "/>
                <circle class='circle' id="XMLID_17_" fill="none"  stroke-width="7" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" cx="106.8" cy="106.8" r="103.3"/>
                </svg>
              </a>
            </div>
          </div>
        </div>
        
            
        
      </header>
      <div class="background">
      @foreach($cocktails as $cocktail)
      <div class="table">
        <div class="title">
            <h1>{{$cocktail->name}}</h1>
        </div> 
        <div class="title">
        <h3>{{$cocktail->glassType->name}}</h3>
        </div> 
    <table class="content-table">
        <thead>
        <tr>
            <th>Ingrédient</th>
            <th>Type</th>
            <th>Quantité</th>
        </tr>
        </thead>
        <tbody>
          @foreach($cocktail->ingredients as $ingredient)
        <tr>
            <td>{{$ingredient->ingredientName->name}}</td>
            <td>{{$ingredient->ingredient_type}}</td>
            <td>{{$ingredient->quantity}}</td>
        </tr>
        @endforeach
        </tbody>
    </table>
    @endforeach
    </div>
</div>
    </main>
    
</body>
</html>