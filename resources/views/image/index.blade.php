<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('index') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                {{-- start Post --}}
                @foreach ($images as $image )


                      <div class="py-12 bg-light">
                        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                          <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                            <img src="{{ asset('images/'.$image->path) }}" alt=""  width="150" height="150">

                            <div class="card-body">
                              <p class="card-text">هذه بطاقة أوسع مع نص داعم أدناه كمقدمة طبيعية لمحتوى إضافي. هذا المحتوى أطول قليلاً.</p>
                              <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                  <button type="button" class="btn btn-sm btn-outline-secondary">عرض</button>
                                  <button type="button" class="btn btn-sm btn-outline-secondary">تعديل</button>
                                </div>
                                <small class="text-muted">{{ $image->created_at->now()->format('Y.m.d') }} </small>
                              </div>
                            </div>
                          </div>
                        </div>
                    </div>

                @endforeach
            {{-- End Post --}}

            </div>
        </div>
    </div>
</x-app-layout>
