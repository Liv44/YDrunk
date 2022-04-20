<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
</head>
<body>
    <h1>Création d'un Cocktail</h1>
    <h2>Ajout des ingrédients 2/2</h2
    <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>
            
        <form method="POST"  action="{{route('cocktails.store')}}">
            @csrf
            <div id="form">
            <button type="button" id="plus">(+) Ajouter un ingrédient</button>
            </div>
            <button type="submit">Envoyer</button>
        </form>
        <a href="{{route('admin.dashboard')}}">Retour</a>
    
</body>
</html>
<script type='text/javascript'>
    button = document.getElementById('plus');
    var counter = 0;

    button.addEventListener('click', function() {
        var tabOptions = ["Alcools", "Fruits", "Softs", "Sirops"];
        var select = newSelect(tabOptions, "level1");
        select.name = "first-select-" + counter;
        var div = document.createElement("div");
        div.appendChild(select);
        document.getElementById('form').insertBefore(div, button);
        var select2 = document.createElement("select");
        select2.name = "second-select-" + counter;
        var optionDefault = document.createElement('option');
        optionDefault.value=0;
        optionDefault.text="Choisissez un type";
        select2.appendChild(optionDefault);
        div.appendChild(select2);

        var inputQuantity = document.createElement("input");
            inputQuantity.type = "number";
            inputQuantity.name = "input-" + counter;
            inputQuantity.placeholder = "Quantité";
            div.appendChild(inputQuantity);

        select.addEventListener('change', function() {
            
            switch(select.value) {
                case 'Alcools':
                    removeOptions(select2);

                    @foreach($alcools as $alcool)
                        var option = document.createElement('option');
                        option.value = "{{$alcool->id}}";
                        option.text = "{{$alcool->name}}";
                        select2.appendChild(option);
                    @endforeach
                    break;
                // case 'Fruits':
                //     var tabOptions = [];
                //     @foreach($alcools as $alcool)
                //         tabOptions.push("{{$alcool->name}}");
                //     @endforeach
                //     var select2 = newSelect(tabOptions, "level2");
                //     div.appendChild(select2);
                //     break;
                case 'Softs':
                    removeOptions(select2);
                    @foreach($softs as $soft)
                        var option = document.createElement('option');
                        option.value = "{{$soft->id}}";
                        option.text = "{{$soft->name}}";
                        select2.appendChild(option);
                    @endforeach
                    break;
                case 'Sirops':
                    removeOptions(select2);

                    @foreach($sirops as $sirop)
                        var option = document.createElement('option');
                        option.value = "{{$sirop->id}}";
                        option.text = "{{$sirop->name}}";
                        select2.appendChild(option);
                    @endforeach
                    break;
            }
        });
    });


    function newSelect(tabOptions, level){
        var select = document.createElement('select');

        var optionDefault = document.createElement('option');
        optionDefault.text="Choisissez un type";
        select.appendChild(optionDefault);

        tabOptions.forEach((optionName) => {
            var option = document.createElement('option');
            option.value = optionName;
            option.text = optionName;
            select.appendChild(option);
        });

        return select;
    }

    function removeOptions(selectElement) {
        var i, L = selectElement.options.length - 1;
        for(i = L; i >= 0; i--) {
            selectElement.remove(i);
        }
    }
</script>