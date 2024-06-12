<x-layout title="Cadastro de Pessoas">
    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">Pessoa</h2>
        <p class="mt-4 text-sm/relaxed">Informe o código e o nome da pessoa.</p>
    </div>

    <form action="/person" method="post">
        @csrf
        <input type="text" id="person_id" name="person_id" placeholder="Código" class="form-control" oninput="this.value=this.value.replace(/[^0-9]/g, '');" autofocus>
        <input type="text" id="person_name" name="person_name" placeholder="Nome" class="form-control mt-3">
        <button type="submit" class="btn btn-sm btn-success w-100 mt-3">Salvar</button>
    </form>
</x-layout>
