<p align="center">
  Autimatic OS
</p>

## Objetivo

<p> 
  API desenvolvida afim de aprender um pouco sobre como funciona um sistema em API REST, bem como o
  funcionamento dos principais protocolos HTTP.
</p>

## Sobre

<p> 
  O sistema tem como função de um CRUD, ou seja é possível criar, editar, deletar, fazer leitura, de
  ordens de serviço. O objetivo é cadastrar uma ordem de serviço simples contendo alguns dados básicos e então salvar no banco de dados para ser consumido utilizando alguma outra plataforma.
</p>

## Endpoins

<p> 
  O sistema conta com autenticaão JWT, e as rotas protegidas da mesma forma.
  Por padrão os endpoints de acesso são:
    <ul>
      <li>Para realizar o login (email e senha apenas) *POST: url/api/auth</li>
      <li>Para obter a lista de ordens de servico *GET: url/api/services/</li>
      <li>Para obter uma ordem específica *GET: url/api/services/{id}</li>
      <li>Para deletar uma ordem específica *DELETE: url/api/services/{id}</li>
      <li>Para atualizar uma ordem específica *PUT: url/api/services/{id}</li>
      <li>Para criar uma ordem de serviço *POST: url/api/services/</li>
    </ul>
</p>
