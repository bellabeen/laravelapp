<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | The following language lines contain the default error messages used by
    | the validator class. Some of these rules have multiple versions such
    | as the size rules. Feel free to tweak each of these messages here.
    |
    */

    'accepted' => 'The :attribute must be accepted.',
    'active_url' => 'The :attribute is not a valid URL.',
    'after' => 'The :attribute must be a date after :date.',
    'after_or_equal' => 'The :attribute must be a date after or equal to :date.',
    'alpha' => 'The :attribute may only contain letters.',
    'alpha_dash' => 'The :attribute may only contain letters, numbers, dashes and underscores.',
    'alpha_num' => 'The :attribute may only contain letters and numbers.',
    'array' => 'The :attribute must be an array.',
    'before' => 'The :attribute must be a date before :date.',
    'before_or_equal' => 'The :attribute must be a date before or equal to :date.',
    'between' => [
        'numeric' => 'The :attribute must be between :min and :max.',
        'file' => 'The :attribute must be between :min and :max kilobytes.',
        'string' => 'The :attribute must be between :min and :max characters.',
        'array' => 'The :attribute must have between :min and :max items.',
    ],
    'boolean' => 'The :attribute field must be true or false.',
    'confirmed' => 'The :attribute confirmation does not match.',
    'date' => 'The :attribute is not a valid date.',
    'date_equals' => 'The :attribute must be a date equal to :date.',
    'date_format' => 'The :attribute does not match the format :format.',
    'different' => 'The :attribute and :other must be different.',
    'digits' => 'The :attribute must be :digits digits.',
    'digits_between' => 'The :attribute must be between :min and :max digits.',
    'dimensions' => 'The :attribute has invalid image dimensions.',
    'distinct' => 'The :attribute field has a duplicate value.',
    'email' => 'The :attribute must be a valid email address.',
    'ends_with' => 'The :attribute must end with one of the following: :values.',
    'exists' => 'The selected :attribute is invalid.',
    'file' => 'The :attribute must be a file.',
    'filled' => 'The :attribute field must have a value.',
    'gt' => [
        'numeric' => 'The :attribute must be greater than :value.',
        'file' => 'The :attribute must be greater than :value kilobytes.',
        'string' => 'The :attribute must be greater than :value characters.',
        'array' => 'The :attribute must have more than :value items.',
    ],
    'gte' => [
        'numeric' => 'The :attribute must be greater than or equal :value.',
        'file' => 'The :attribute must be greater than or equal :value kilobytes.',
        'string' => 'The :attribute must be greater than or equal :value characters.',
        'array' => 'The :attribute must have :value items or more.',
    ],
    'image' => 'The :attribute must be an image.',
    'in' => 'The selected :attribute is invalid.',
    'in_array' => 'The :attribute field does not exist in :other.',
    'integer' => 'The :attribute must be an integer.',
    'ip' => 'The :attribute must be a valid IP address.',
    'ipv4' => 'The :attribute must be a valid IPv4 address.',
    'ipv6' => 'The :attribute must be a valid IPv6 address.',
    'json' => 'The :attribute must be a valid JSON string.',
    'lt' => [
        'numeric' => 'The :attribute must be less than :value.',
        'file' => 'The :attribute must be less than :value kilobytes.',
        'string' => 'The :attribute must be less than :value characters.',
        'array' => 'The :attribute must have less than :value items.',
    ],
    'lte' => [
        'numeric' => 'The :attribute must be less than or equal :value.',
        'file' => 'The :attribute must be less than or equal :value kilobytes.',
        'string' => 'The :attribute must be less than or equal :value characters.',
        'array' => 'The :attribute must not have more than :value items.',
    ],
    'max' => [
        'numeric' => 'The :attribute may not be greater than :max.',
        'file' => 'The :attribute may not be greater than :max kilobytes.',
        'string' => 'The :attribute may not be greater than :max characters.',
        'array' => 'The :attribute may not have more than :max items.',
    ],
    'mimes' => 'The :attribute must be a file of type: :values.',
    'mimetypes' => 'The :attribute must be a file of type: :values.',
    'min' => [
        'numeric' => 'The :attribute must be at least :min.',
        'file' => 'The :attribute must be at least :min kilobytes.',
        'string' => 'The :attribute must be at least :min characters.',
        'array' => 'The :attribute must have at least :min items.',
    ],
    'not_in' => 'The selected :attribute is invalid.',
    'not_regex' => 'The :attribute format is invalid.',
    'numeric' => 'The :attribute must be a number.',
    'password' => 'The password is incorrect.',
    'present' => 'The :attribute field must be present.',
    'regex' => 'The :attribute format is invalid.',
    'required' => 'Kolom :attribute harus diisi.',
    'required_if' => 'The :attribute field is required when :other is :value.',
    'required_unless' => 'The :attribute field is required unless :other is in :values.',
    'required_with' => 'The :attribute field is required when :values is present.',
    'required_with_all' => 'The :attribute field is required when :values are present.',
    'required_without' => 'The :attribute field is required when :values is not present.',
    'required_without_all' => 'The :attribute field is required when none of :values are present.',
    'same' => 'The :attribute and :other must match.',
    'size' => [
        'numeric' => 'The :attribute must be :size.',
        'file' => 'The :attribute must be :size kilobytes.',
        'string' => 'The :attribute must be :size characters.',
        'array' => 'The :attribute must contain :size items.',
    ],
    'starts_with' => 'The :attribute must start with one of the following: :values.',
    'string' => 'The :attribute must be a string.',
    'timezone' => 'The :attribute must be a valid zone.',
    'unique' => 'The :attribute has already been taken.',
    'uploaded' => 'The :attribute failed to upload.',
    'url' => 'The :attribute format is invalid.',
    'uuid' => 'The :attribute must be a valid UUID.',

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Language Lines
    |--------------------------------------------------------------------------
    |
    | Here you may specify custom validation messages for attributes using the
    | convention "attribute.rule" to name the lines. This makes it quick to
    | specify a specific custom language line for a given attribute rule.
    |
    */

    'custom' => [
        'kode_pendaftaran' => [
            // 'required' => 'Kolom Kode Pendaftaran harus diisi',
            'string' => 'Kolom Kode Pendaftaran harus berupa string',
            
        ],

        'nama_siswa' => [
            // 'required' => 'Kolom Nama Siswa harus diisi',
            'string' => 'Kolom Nama Siswa harus berupa string',
            'max' => 'Kolom Nama Siswa tidak boleh lebih dari :max karakter',
        ],

        'jenis_kelamin' => [
            // 'required' => 'Kolom Jenis Kelamin harus diisi',
            'in' => 'Kolom Jenis Kelamin harus diisi L atau P',
        ],

        'tempat_lahir' => [
            // 'required' => 'Kolom Tempat Lahir harus diisi',
            'string' => 'Kolom Tempat Lahir harus berupa string',
            'max' => 'Kolom Tempat Lahir tidak boleh lebih dari :max karakter',
        ],

        'alamat' => [
            // 'required' => 'Kolom Alamat harus diisi',
            'string' => 'Kolom Alamat harus berupa string',
            'max' => 'Kolom Nama Siswa tidak boleh lebih dari :max karakter',
        ],

        'kelurahan' => [
            // 'required' => 'Kolom Kelurahan harus diisi',
            'string' => 'Kolom Kelurahan harus berupa string',
            'max' => 'Kolom Kelurahan tidak boleh lebih dari :max karakter',
        ],

        'kecamatan' => [
            // 'required' => 'Kolom Kecamatan harus diisi',
            'string' => 'Kolom Kecamatan harus berupa string',
            'max' => 'Kolom Kecamatan tidak boleh lebih dari :max karakter',
        ],

        'kota' => [
            // 'required' => 'Kolom Kota harus diisi',
            'string' => 'Kolom Nama Siswa harus berupa string',
            'max' => 'Kolom Nama Siswa tidak boleh lebih dari :max karakter',
        ],

        'provinsi' => [
            // 'required' => 'Kolom Provinsi harus diisi',
            'string' => 'Kolom Provinsi harus berupa string',
            'max' => 'Kolom Provinsi tidak boleh lebih dari :max karakter',
        ],

        'nama_ortu' => [
            // 'required' => 'Kolom Nama Orang Tua harus diisi',
            'string' => 'Kolom Nama Orang Tua harus berupa string',
            'max' => 'Kolom Nama Orang Tua tidak boleh lebih dari :max karakter',
        ],

        'nomor_nik' => [
            // 'required' => 'Kolom NIK harus diisi',
            'string' => 'Kolom NIK harus berupa string',
            // 'size' => 'Kolom NIK harus :size angka',
            'unique' => 'NIK sudah terpakai.',
        ],

        'nomor_kk' => [
            // 'required' => 'Kolom Nomor KK harus diisi',
            'string' => 'Kolom Nomor KK harus berupa string',
            'size' => 'Kolom Nomor KK harus :size angka',
            'unique' => 'Nomor KK sudah terpakai.',
        ],

        'status' => [
            // 'required' => 'Kolom Status harus diisi',
            'in' => 'Kolom Status harus diisi L atau P',
        ],

        'nisn' => [
            'required' => 'Kolom Kode Pendaftaran harus diisi',
            // 'string' => 'Kolom NISN harus berupa string',
            // 'unique' => 'Kode Pendaftaran sudah terpakai.',
        ],

        'semester_1' => [
            'string' => 'Kolom Semster 1 harus berupa string',
            'max' => 'Kolom Semester 1 tidak boleh lebih dari :max karakter',
            
        ],

        'semester_2' => [
            'string' => 'Kolom Semster 2 harus berupa string',
            'max' => 'Kolom Semester 2 tidak boleh lebih dari :max karakter',
        ],

        'semester_3' => [
            'string' => 'Kolom Semster 3 harus berupa string',
            'max' => 'Kolom Semester 3 tidak boleh lebih dari :max karakter',
            
        ],

        'semester_4' => [
            'string' => 'Kolom Semster 4 harus berupa string',
            'max' => 'Kolom Semester 4 tidak boleh lebih dari :max karakter',
            
        ],
        'semester_5' => [
            'string' => 'Kolom Semster 5 harus berupa string',
            'max' => 'Kolom Semester 5 tidak boleh lebih dari :max karakter',
         
        ],

        'foto' => [
            'image' => 'Kolom Foto hanya boleh berisi gambar.',
            'max' => 'Kolom Foto tidak boleh lebih dari 500 KB',
            'mimes' => 'Kolom Foto hanya boleh diisi file *.jpg, *.jpeg, *.png',
        ],


    ],

    /*
    |--------------------------------------------------------------------------
    | Custom Validation Attributes
    |--------------------------------------------------------------------------
    |
    | The following language lines are used to swap our attribute placeholder
    | with something more reader friendly such as "E-Mail Address" instead
    | of "email". This simply helps us make our message more expressive.
    |
    */

    'attributes' => [],

];
