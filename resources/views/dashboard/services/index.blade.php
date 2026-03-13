@extends('dashboard.layouts.app')

@section('title', 'IT Services')
@section('page-title', 'IT Services Management')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h3 class="text-xl font-bold text-gray-900">All IT Services</h3>
    <a href="{{ route('dashboard.services.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
        <i class="fas fa-plus"></i> New Service
    </a>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100 border-b border-gray-200">
            <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Icon</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Title</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Description</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Order</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Status</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($services as $service)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4 text-center">
                    <i class="{{ $service->icon }} text-2xl text-orange-500"></i>
                </td>
                <td class="px-6 py-4 text-sm text-gray-900 font-semibold">
                    {{ $service->title }}
                </td>
                <td class="px-6 py-4 text-sm text-gray-600">
                    {{ Str::limit($service->description, 60) }}
                </td>
                <td class="px-6 py-4 text-center text-sm text-gray-600">
                    {{ $service->order }}
                </td>
                <td class="px-6 py-4 text-center text-sm">
                    <form action="{{ route('dashboard.services.toggle-active', $service) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-3 py-1 rounded-full text-xs font-medium transition {{ $service->is_active ? 'bg-green-100 text-green-700 hover:bg-green-200' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            {{ $service->is_active ? '✓ Active' : '○ Inactive' }}
                        </button>
                    </form>
                </td>
                <td class="px-6 py-4 text-center text-sm">
                    <div class="flex justify-center gap-3">
                        <a href="{{ route('dashboard.services.edit', $service) }}" class="text-blue-600 hover:text-blue-900">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('dashboard.services.destroy', $service) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this service?');">
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
                    <p class="mt-2">No services yet. <a href="{{ route('dashboard.services.create') }}" class="text-blue-600 hover:underline">Create one</a></p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
