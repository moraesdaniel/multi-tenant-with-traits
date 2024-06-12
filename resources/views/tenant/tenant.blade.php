<x-layout title="Informe o tenant">
    <div class="pt-3 sm:pt-5">
        <h2 class="text-xl font-semibold text-black dark:text-white">Tenant</h2>
        <p class="mt-4 text-sm/relaxed">Informe aqui o código do tenant ao qual você pertence</p>
    </div>

    <form action="/tenant" method="post">
        @csrf
        <input type="text" id="tenant_id" name="tenant_id" class="form-control" autofocus>
        <button type="submit" class="btn btn-sm btn-success w-100 mt-3">Entrar</button>
    </form>
</x-layout>
