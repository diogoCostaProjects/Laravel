<h3>Fornecedores</h3>


{{-- @isset($fornecedores)
   Fornecedor: {{$fornecedores[0]['nome']}} <br>
   Status: {{$fornecedores[0]['status']}} <br>
   {{-- Uso de if ternário no blade -
   Cnpj: {{$fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido'}}
@endisset --}}

@forelse($fornecedores as $indice => $fornecedor)
   Fornecedor: {{$fornecedor['nome']}} <br>
   Status: {{$fornecedor['status']}} <br>
   Cnpj: {{$fornecedor['cnpj'] ?? 'Dado não foi preenchido'}} <br>
   
   {{-- Pega a iteração e verifica se é o primeiro indice do array --}}
   @if($loop->first) 
        Esta e a primeira iteração
   @endif

   @if($loop->last) 
        Esta e a última iteração

        <br><br>
   <strong>Total de registros: {{$loop->count}}</strong>
   @endif
   
   <hr>
@empty
    Não existem fornecedores cadastrados
@endforelse



{{-- @switch($varteste)
    @case(1)
        é um
    @break
    @case(2)
        é dois
    @break
@endswitch --}}
{{-- <br>
@for ($i = 0; $i < count($fornecedores); $i++)
     {{$fornecedores[$i]['nome']}} <br>
@endfor --}}
{{-- @empty($fornecedores[0]['cnpj'])
    Está vazio 
@endempty --}}
{{-- @php $i = 0 @endphp
@while($i < 2)
   Fornecedor: {{$fornecedores[0]['nome']}} <br>
   Status: {{$fornecedores[0]['status']}} <br>
   Cnpj: {{$fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido'}} <br>
   <hr>

   @php $i ++ @endphp
@endwhile --}}

{{-- @php 

    @if ()
        
    @endif -

@endphp --}}

{{-- imprime o array  e a estrutura completa como o Dump  --}}
{{-- @dd($fornecedores)  --}}


{{-- @if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Tem fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Tem vários fornecedores</h3>
@else
    <h3>ainda não há fornecedores</h3>
@endif --}}

{{-- @unless verifica o false na condição --}}
