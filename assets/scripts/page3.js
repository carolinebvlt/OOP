function checkAnswer(input){
  var enonce = document.getElementById('enonce');
  switch (enonce.innerHTML) {

    case 'Instancie un pokémon stocké dans une variable "$pokemon_1" :' :
      if(
          input.value === "$pokemon_1=new Pokemon;" ||
          input.value === "$pokemon_1=new Pokemon();"
        ){
        document.getElementById('pokemon_1').style.display = "block";
        enonce.innerHTML = 'Instancie un second pokémon stocké dans une variable "$pokemon_2" :';
        input.value = "";
      }
      else{
        console.log('no');
      }
      break;

    case 'Instancie un second pokémon stocké dans une variable "$pokemon_2" :' :
      if(
          input.value === "$pokemon_2=new Pokemon;" ||
          input.value === "$pokemon_2=new Pokemon();"
        ){
        document.getElementById('pokemon_2').style.display = "block";
        enonce.innerHTML = 'Maintenant, fais en sorte que le 1er attaque le 2ème :';
        input.value = "";
      }
      break;

    case 'Maintenant, fais en sorte que le 1er attaque le 2ème :' :
      if(
          input.value === "$pokemon_1->attaquer($pokemon_2);"
        ){
        document.getElementById('xp_1').innerHTML = 'XP : 11';
        document.getElementById('pv_2').innerHTML = 'PV : 15';
        enonce.innerHTML = '';
        input.value = "";
        input.style.display = "none";
        document.getElementById('toHideAfter').style.display = "none";
        document.getElementById('dev').style.display = "block";
      }
      break;
  }
}

function checkAnswers(cara1,cara2,cara3,bulbi1,bulbi2,bulbi3){
  var validation = document.getElementById('validation');
  if (
      Number(cara1.value) === 20 &&
      Number(cara2.value) === 12 &&
      Number(cara3.value) === 16 &&
      Number(bulbi1.value) === 15 &&
      Number(bulbi2.value) === 10 &&
      Number(bulbi3.value) === 5
    ){
      validation.innerHTML = "Correct !";
  }
  else{
    validation.innerHTML = "Faux !";
  }

}
