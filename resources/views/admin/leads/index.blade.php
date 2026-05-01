@extends('layouts.dashboard')

@section('title', 'Demandes | Just Agro Group')
@section('heading', 'Demandes clients')

@section('content')
<div class="rounded-[2rem] bg-white p-6 shadow-soft">
    <div class="flex flex-wrap gap-3">
        @foreach (['nouveau' => 'Nouvelles', 'approuve' => 'Approuvées', 'archive' => 'Archivées', 'tous' => 'Toutes'] as $key => $label)
            <a href="{{ route('admin.leads.index', ['status' => $key]) }}" class="rounded-full px-5 py-3 text-xs font-heading font-bold uppercase tracking-[0.16em] {{ $status === $key ? 'bg-jagNavy text-white' : 'bg-jagMuted text-jagNavy' }}">{{ $label }}</a>
        @endforeach
    </div>

    <div class="mt-6 space-y-3">
        @forelse ($leads as $lead)
            <a href="{{ route('admin.leads.show', $lead) }}" class="block rounded-2xl border border-slate-200 p-5 transition hover:bg-jagMuted">
                <div class="flex flex-col gap-2 lg:flex-row lg:items-center lg:justify-between">
                    <div>
                        <div class="font-semibold text-jagNavy">{{ $lead->name }} — {{ $lead->profile_type }}</div>
                        <div class="mt-1 text-sm text-jagText">{{ $lead->email }} / {{ $lead->phone }}</div>
                    </div>
                    <span class="w-fit rounded-full bg-white px-3 py-2 text-[11px] font-heading font-bold uppercase tracking-[0.16em] text-jagNavy">{{ $lead->status }}</span>
                </div>
            </a>
        @empty
            <p class="text-sm text-slate-500">Aucune demande.</p>
        @endforelse
    </div>

    <div class="mt-6">{{ $leads->links() }}</div>
</div>
@endsection
