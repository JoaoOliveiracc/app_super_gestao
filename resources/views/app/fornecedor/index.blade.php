<h3>Fornecedores</h3>

{{-- Fica o comentário que será descartado pelo interpretador do balde --}}

@php
    // Para comentários de uma linha 
    /* 
        Para comentários de múltiplas linhas
    */
@endphp

@if (count($fornecedores) > 0 && count($fornecedores) < 10)
    <h3>Existem alguns fornecedores cadastrados</h3>
@elseif (count($fornecedores) > 10)
    <h3>Existem vários fornecedores cadastrados</h3>
@else
    <h3>Ainda não existem fornecedores cadastrados</h3>
@endif