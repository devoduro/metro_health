@extends('dashboard.layouts.app')

@section('title', 'Testimonials')
@section('page-title', 'Client Testimonials Management')

@section('content')
<div class="mb-6 flex justify-between items-center">
    <h3 class="text-xl font-bold text-gray-900">All Testimonials</h3>
    <a href="{{ route('dashboard.testimonials.create') }}" class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition flex items-center gap-2">
        <i class="fas fa-plus"></i> New Testimonial
    </a>
</div>

<div class="bg-white rounded-lg shadow-md overflow-hidden">
    <table class="w-full">
        <thead class="bg-gray-100 border-b border-gray-200">
            <tr>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Client</th>
                <th class="px-6 py-4 text-left text-sm font-semibold text-gray-700">Content</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Rating</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Order</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Status</th>
                <th class="px-6 py-4 text-center text-sm font-semibold text-gray-700">Actions</th>
            </tr>
        </thead>
        <tbody class="divide-y divide-gray-200">
            @forelse($testimonials as $testimonial)
            <tr class="hover:bg-gray-50 transition">
                <td class="px-6 py-4 text-sm">
                    <div class="font-semibold text-gray-900">{{ $testimonial->client_name }}</div>
                    <div class="text-xs text-gray-500">{{ $testimonial->client_position }}</div>
                    <div class="text-xs text-gray-500">{{ $testimonial->client_organization }}</div>
                </td>
                <td class="px-6 py-4 text-sm text-gray-600">
                    {{ Str::limit($testimonial->content, 80) }}
                </td>
                <td class="px-6 py-4 text-center">
                    <div class="text-yellow-500">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star{{ $i <= $testimonial->rating ? '' : '-o' }}"></i>
                        @endfor
                    </div>
                </td>
                <td class="px-6 py-4 text-center text-sm text-gray-600">
                    {{ $testimonial->order }}
                </td>
                <td class="px-6 py-4 text-center text-sm">
                    <form action="{{ route('dashboard.testimonials.toggle-active', $testimonial) }}" method="POST" class="inline">
                        @csrf
                        <button type="submit" class="px-3 py-1 rounded-full text-xs font-medium transition {{ $testimonial->is_active ? 'bg-green-100 text-green-700 hover:bg-green-200' : 'bg-gray-100 text-gray-600 hover:bg-gray-200' }}">
                            {{ $testimonial->is_active ? '✓ Active' : '○ Inactive' }}
                        </button>
                    </form>
                </td>
                <td class="px-6 py-4 text-center text-sm">
                    <div class="flex justify-center gap-3">
                        <a href="{{ route('dashboard.testimonials.edit', $testimonial) }}" class="text-blue-600 hover:text-blue-900">
                            <i class="fas fa-edit"></i>
                        </a>
                        <form action="{{ route('dashboard.testimonials.destroy', $testimonial) }}" method="POST" style="display:inline;" onsubmit="return confirm('Delete this testimonial?');">
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
                    <p class="mt-2">No testimonials yet. <a href="{{ route('dashboard.testimonials.create') }}" class="text-blue-600 hover:underline">Add one</a></p>
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
</div>
@endsection
