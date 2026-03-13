@extends('dashboard.layouts.app')

@section('title', 'Clients')
@section('page-title', 'Clients & Partners Management')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h3 class="text-xl font-bold text-gray-900">All Clients & Partners</h3>
    <a href="{{ route('dashboard.clients.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
        <i class="fas fa-plus"></i> New Client
    </a>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100 border-b border-gray-200">
            <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Logo</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Name</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Website</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Order</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Status</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($clients as $client)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4">
                    @if($client->logo)
                        <img src="{{ $client->logo }}" alt="{{ $client->name }}" class="h-12 w-auto object-contain">
                    @else
                        <div class="h-12 w-12 bg-gray-200 rounded flex items-center justify-center">
                            <i class="fas fa-building text-gray-400"></i>
                        </div>
                    @endif
                </td>
                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">
                    {{ $client->name }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-600">
                    @if($client->website)
                        <a href="{{ $client->website }}" target="_blank" class="text-blue-600 hover:underline">
                            {{ Str::limit($client->website, 30) }}
                        </a>
                    @else
                        <span class="text-gray-400">N/A</span>
                    @endif
                </td>
                <td class="px-6 py-4 text-center text-sm text-gray-600">
                    {{ $client->order }}
                </td>
                <td class="px-6 py-4 text-center text-sm">
                    <form action="{{ route('dashboard.clients.toggle-active', $client) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-3 py-1 rounded-full text-xs font-medium transition {{ $client->is_active ? 'bg-green-100 text-green-700 hover:bg-green-200' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            {{ $client->is_active ? '✓ Active' : '○ Inactive' }}
                        </button>
                    </form>
                </td>
                <td class="px-6 py-4 text-center text-sm">
                    <div class="flex justify-center gap-3">
                        <a href="{{ route('dashboard.clients.edit', $client) }}" class="text-blue-600 hover:text-blue-900">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('dashboard.clients.destroy', $client) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this client?');">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:text-red-900">
                                <i class="fas fa-trash"></i>
                            </button>
                        </form>
                    </div>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="px-6 py-8 text-center text-gray-500">
                    <i class="fas fa-inbox text-3xl mb-2 opacity-50"></i>
                    <p class="mt-2">No clients yet. <a href="{{ route('dashboard.clients.create') }}" class="text-blue-600 hover:underline">Add one</a></p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
