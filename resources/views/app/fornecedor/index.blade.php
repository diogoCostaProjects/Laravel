<h3>Fornecedor</h3>


@isset($fornecedores)
   Fornecedor: {{$fornecedores[0]['nome']}} <br>
   Status: {{$fornecedores[0]['status']}} <br>
   {{-- Uso de if ternário no blade --}}
   Cnpj: {{$fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido'}}
@endisset

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
@php $i = 0 @endphp
@while($i < 2)
   Fornecedor: {{$fornecedores[0]['nome']}} <br>
   Status: {{$fornecedores[0]['status']}} <br>
   Cnpj: {{$fornecedores[0]['cnpj'] ?? 'Dado não foi preenchido'}} <br>
   <hr>

   @php $i ++ @endphp
@endwhile

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
