<x-layout title="Cadastro de Item">
    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">Item</h2>
        <p class="mt-4 text-sm/relaxed">Informe o código e a descrição do item</p>
    </div>

    <form action="/item" method="post">
        @csrf
        <input type="text" id="item_id" name="item_id" placeholder="Código" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g, '');" autofocus>
        <input type="text" id="item_description" name="item_description" placeholder="Descrição" class="form-control mt-3">
        <button type="submit" class="btn btn-sm btn-success w-100 mt-3 mb-3">Salvar</button>
    </form>
    <div class="table-responsive rounded border">
        <table id="items-table" class="table table-striped mb-0 pb-0">
            <thead class="rounded">
                <th scope="col" class="bg-success text-light">ID</th>
                <th scope="col" class="bg-success text-light">Descrição</th>
                <th scope="col" class="bg-success text-light">Tenant</th>
            </thead>
            <tbody class="rounded">
                @if (isset($items))
                    @foreach ($items as $item)
                        <tr>
                            <th scope="row">{{$item->id}}</th>
                            <td>{{$item->description}}</td>
                            <td>{{$item->tenant_id}}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</x-layout>
