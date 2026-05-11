@if ($errors->any())
    <div class="mb-6 rounded-2xl border border-red-200 bg-red-50 px-5 py-4 text-sm text-red-700">
        <p class="font-semibold text-red-800">Merci de corriger les erreurs suivantes :</p>
        <ul class="mt-3 list-disc space-y-1 pl-5">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
