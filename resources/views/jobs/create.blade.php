<x-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @if(session('success'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        {{ session('success') }}
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                @if($errors->any())
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        <ul class="mb-0">
                            @foreach($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                    </div>
                @endif

                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h4 class="mb-0">Yeni İş İlanı Oluştur</h4>
                    </div>
                    <div class="card-body">
                        <form action="/jobs" method="POST">
                            @csrf
                            
                            <div class="mb-3">
                                <label for="title" class="form-label">İş Başlığı</label>
                                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title" value="{{ old('title') }}" required>
                                @error('title')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            
                            <div class="mb-3">
                                <label for="location" class="form-label">Konum</label>
                                <input type="text" class="form-control @error('location') is-invalid @enderror" id="location" name="location" value="{{ old('location') }}" required>
                                @error('location')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                      
                            <div class="d-grid gap-2">
                                <button type="submit" class="btn btn-primary">İlanı Yayınla</button>
                                {{-- <a href="{{ route('jobs.index') }}" class="btn btn-outline-secondary">İptal</a> --}}
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-layout>
