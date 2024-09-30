<x-app-layout>

    <h5 class="mt-3">Lista de Exercício 3</h5>
    <h1>Bem-vindo à Lista de Exercícios</h1>
    <p>Selecione o exercício que deseja realizar:</p>
    <ul>
      <li><a href="{{ route('exibir-form-soma') }}">Exercício 1 - Somar dois números</a></li>
      <li><a href="{{ route('exibir-form-subtracao') }}">Exercício 2 - Subtrair dois números</a></li>
      <li><a href="{{ route('exibir-form-multiplicacao') }}">Exercício 3 - Multiplicar dois números</a></li>
      <li><a href="{{ route('exibir-form-divisao') }}">Exercício 4 - Dividir dois números</a></li>
      <li><a href="{{ route('exibir-form-media') }}">Exercício 5 - Média de três notas</a></li>
      <li><a href="{{ route('exibir-form-celsius-fahrenheit') }}">Exercício 6 - Converter Celsius para Fahrenheit</a></li>
      <li><a href="{{ route('exibir-form-fahrenheit-celsius') }}">Exercício 7 - Converter Fahrenheit para Celsius</a></li>
      <li><a href="{{ route('exibir-form-area-retangulo') }}">Exercício 8 - Calcular área do retângulo</a></li>
      <li><a href="{{ route('exibir-form-area-circulo') }}">Exercício 9 - Calcular área do círculo</a></li>
      <li><a href="{{ route('exibir-form-perimetro-retangulo') }}">Exercício 10 - Calcular perímetro do retângulo</a></li>
      <li><a href="{{ route('exibir-form-perimetro-circulo') }}">Exercício 11 - Calcular perímetro do círculo</a></li>
      <li><a href="{{ route('exibir-form-potencia') }}">Exercício 12 - Potência (base^expoente)</a></li>
      <li><a href="{{ route('exibir-form-metros-centimetros') }}">Exercício 13 - Converter metros para centímetros</a></li>
      <li><a href="{{ route('exibir-form-quilometros-milhas') }}">Exercício 14 - Converter quilômetros para milhas</a></li>
      <li><a href="{{ route('exibir-form-imc') }}">Exercício 15 - Calcular IMC</a></li>
      <li><a href="{{ route('exibir-form-desconto') }}">Exercício 16 - Calcular preço com desconto</a></li>
      <li><a href="{{ route('exibir-form-juros-simples') }}">Exercício 17 - Calcular juros simples</a></li>
      <li><a href="{{ route('exibir-form-juros-compostos') }}">Exercício 18 - Calcular montante com juros compostos</a></li>
      <li><a href="{{ route('exibir-form-conversao-dias') }}">Exercício 19 - Converter dias para horas, minutos e segundos</a></li>
      <li><a href="{{ route('exibir-form-velocidade-media') }}">Exercício 20 - Calcular velocidade média</a></li>
    </ul>
    <div class="d-flex justify-content-center">
        <div id="piechart" style="width: 900px; height: 500px;"></div>
    </div>
</x-app-layout>
