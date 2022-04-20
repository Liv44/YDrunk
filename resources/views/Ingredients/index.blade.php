<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cocktails</title>
</head>
<body>
    <h1>Création du cocktail : {{$cocktailName}}</h1>
    <h2>Ajout des ingrédients 2/2</h2>
    <h3>Connecté en tant que : {{Auth::guard('admin')->user()->name}} - ADMIN</h3>
            <table>
                <thead>
                    <tr>
                        <th>Type de l'ingrédient</th>
                        <th>Nom de l'ingrédient</th>
                        <th>Quantité</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($ingredients as $ingredient)
                        <tr>
                            <td>{{$ingredient->ingredient_type}}</td>
                            <td>{{$ingredient->ingredientName->name}}</td>
                            <td>{{$ingredient->quantity}}</td>
                            <td>
                                <a href="{{route('ingredients.delete', $ingredient->id )}}">Supprimer</a>
                            </td>                            
                        </tr>
                    @endforeach
                </tbody>
            </table>
        <form method="POST"  action="{{route('ingredients.add', $id)}}">
            @csrf
            <input hidden name="counter" id="counter">
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
    let counter = 0;

    button.addEventListener('click', function() {
        let div = document.createElement("div");
        
        // Select Type of ingredient
        let tabOptions = ["alcools", "fruits", "softs", "sirops"];
        let select = newSelect(tabOptions);
        select.name = "ingredient_type_" + counter;
        select.setAttribute("required", true);
        div.appendChild(select);

        // Select ingredient
        let select2 = document.createElement("select");
        select2.name = "ingredient_id_" + counter;
        select2.setAttribute("required", true);
        @foreach($alcools as $alcool)
            var option = document.createElement('option');
            option.value = "{{$alcool->id}}";
            option.text = "{{$alcool->name}}";
            select2.appendChild(option);
        @endforeach
        div.appendChild(select2);
        
        // Input quantity
        let inputQuantity = document.createElement("input");
            inputQuantity.type = "text";
            inputQuantity.name = "quantity_" + counter;
            inputQuantity.placeholder = "Quantité";
            inputQuantity.setAttribute("required", true);
            div.appendChild(inputQuantity);

        // Button delete
        let buttonDelete = document.createElement("button");
            buttonDelete.type = "button";
            buttonDelete.innerHTML = "Supprimer";
            buttonDelete.addEventListener('click', function() {
                div.remove();
            });
            div.appendChild(buttonDelete);
        
        //Add div ingredients to form
        document.getElementById('form').insertBefore(div, button);
        
        counter++;
        document.getElementById("counter").value = counter;

        select.addEventListener('change', function() {
            
            switch(select.value) {
                case 'alcools':
                    removeOptions(select2);

                    @foreach($alcools as $alcool)
                        var option = document.createElement('option');
                        option.value = "{{$alcool->id}}";
                        option.text = "{{$alcool->name}}";
                        select2.appendChild(option);
                    @endforeach
                    break;
                case 'fruits':
                    removeOptions(select2);

                    @foreach($fruits as $fruit)
                        var option = document.createElement('option');
                        option.value = "{{$fruit->id}}";
                        option.text = "{{$fruit->name}}";
                        select2.appendChild(option);
                    @endforeach
                    break;
                case 'softs':
                    removeOptions(select2);
                    @foreach($softs as $soft)
                        var option = document.createElement('option');
                        option.value = "{{$soft->id}}";
                        option.text = "{{$soft->name}}";
                        select2.appendChild(option);
                    @endforeach
                    break;
                case 'sirops':
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


    function newSelect(tabOptions){
        let select = document.createElement('select'); 

        tabOptions.forEach((optionName) => {
            let option = document.createElement('option');
            option.value = optionName;
            option.text = optionName;
            select.appendChild(option);
        });

        return select;
    }

    function removeOptions(selectElement) {
        let i, L = selectElement.options.length - 1;
        for(i = L; i >= 0; i--) {
            selectElement.remove(i);
        }
    }
</script>