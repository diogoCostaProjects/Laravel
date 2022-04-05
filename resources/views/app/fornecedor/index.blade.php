<h3>Fornecedor</h3>



{{-- @php 

    @if ()
        
    @endif -

@endphp --}}

{{-- imprime o array  e a estrutura completa como o Dump  --}}
{{-- @dd($fornecedores)  --}}


@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Tem fornecedores</h3>
@elseif(count($fornecedores) > 10)
    <h3>Tem vários fornecedores</h3>
@else
    <h3>ainda não há fornecedores</h3>
@endif
