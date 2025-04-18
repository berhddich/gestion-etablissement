<form method="POST" action="{{ $action }}">
    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul class="mb-0">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="mb-3">
        <label>Nom</label>
        <input type="text" name="name" class="form-control"
               value="{{ old('name', $user->name ?? '') }}" required>
    </div>

    <div class="mb-3">
        <label>Email</label>
        <input type="email" name="email" class="form-control"
       value="{{ old('email', $user->email ?? '') }}"
       {{ Auth::user()->role !== 'admin' ? 'readonly' : '' }} required>


    <div class="mb-3">
        <label>Rôle</label>
        <select name="role" class="form-select">
            @foreach($roles as $role)
                <option value="{{ $role }}"
                    {{ (old('role', $user->role ?? '') == $role) ? 'selected' : '' }}>
                    {{ ucfirst($role) }}
                </option>
            @endforeach
        </select>
    </div>

    <div class="mb-3">
        <label>Mot de passe {{ isset($user) ? '(laisser vide si inchangé)' : '' }}</label>
        <input type="password" name="password" class="form-control"
               {{ isset($user) ? '' : 'required' }}>
    </div>

    <div class="mb-3">
        <label>Confirmation mot de passe</label>
        <input type="password" name="password_confirmation" class="form-control"
               {{ isset($user) ? '' : 'required' }}>
    </div>

    <button type="submit" class="btn btn-success">Enregistrer</button>
    <a href="{{ route('users.index') }}" class="btn btn-secondary">Annuler</a>
</form>
