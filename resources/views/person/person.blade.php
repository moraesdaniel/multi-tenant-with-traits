<x-layout title="Cadastro de Pessoas">
    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">Pessoa</h2>
        <p class="mt-4 text-sm/relaxed">Informe o código e o nome da pessoa.</p>
    </div>

    <form action="/person" method="post">
        @csrf
        <input type="text" id="person_id" name="person_id" placeholder="Código" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g, '');" autofocus>
        <input type="text" id="person_name" name="person_name" placeholder="Nome" class="form-control mt-3">
        <button type="submit" class="btn btn-sm btn-success w-100 mt-3 mb-3">Salvar</button>
    </form>
    <div class="table-responsive rounded border">
        <table id="items-table" class="table table-striped mb-0 pb-0">
            <thead class="rounded">
                <th scope="col" class="bg-success text-light">ID</th>
                <th scope="col" class="bg-success text-light">Nome</th>
                <th scope="col" class="bg-success text-light">Tenant</th>
            </thead>
            <tbody class="rounded">
                @if (isset($people))
                    @foreach ($people as $person)
                        <tr>
                            <th scope="row">{{$person->id}}</th>
                            <td>{{$person->name}}</td>
                            <td>{{$person->tenant_id}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
