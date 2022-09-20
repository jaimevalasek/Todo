<x-main>
    <div class="max-w-7xl mx-auto mt-4 p-4 bg-gray-50 rounded-t-xl border border-gray-200 dark:border-gray-600 dark:bg-gray-700">
        <x-form.session 
            title="Profile"
            description="Preencha o formulário corretamente">

            <x-form action="store" method="post">
                <x-card>
                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <x-input.text name="Name" label="Full name" placeholder="João da silva" class="bg-red-100 text-red-400"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <x-input.text name="Email" label="Email" placeholder="nome@email.com"/>
                        </div>
                    </div>

                    <div class="grid grid-cols-3 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <x-input.text name="company" label="Website" prefix="http://" placeholder="www.exemplo.com" />
                        </div>
                    </div>

                    <div class="grid grid-cols-2 gap-6">
                        <div class="col-span-3 sm:col-span-2">
                            <x-input.textarea name="description" label="Description" placeholder="What's your text description?" description="Description text" />
                        </div>
                    </div>

                    <x-slot name="footer">                        
                        <button type="submit" class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm">
                            Salvar
                        </button>
                    </x-slot>
                </x-card>
            </x-form>
        </x-form.session>
    </div>
</x-main>