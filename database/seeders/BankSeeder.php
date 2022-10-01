<?php

namespace Database\Seeders;

use App\Models\Bank;
use Illuminate\Database\Seeder;

class BankSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Bank::create([
            'key' => '002',
            'name' => 'BANAMEX',
            'business_name' => 'Banco Nacional de México, S.A., Institución de Banca Múltiple, Grupo Financiero Banamex',
            'status'=>1
        ]);
        Bank::create([
            'key' => '006',
            'name' => 'BANCOMEXT',
            'business_name' => 'Banco Nacional de Comercio Exterior, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
            'status'=>1
        ]);
        Bank::create([
            'key' => '009',
            'name' => 'BANOBRAS',
            'business_name' => 'Banco Nacional de Obras y Servicios Públicos, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
            'status'=>1
        ]);
        Bank::create([
            'key' => '012',
            'name' => 'BBVA BANCOMER',
            'business_name' => 'BBVA Bancomer, S.A., Institución de Banca Múltiple, Grupo Financiero BBVA Bancomer',
            'status'=>1
        ]);
        Bank::create([
            'key' => '014',
            'name' => 'SANTANDER',
            'business_name' => 'Banco Santander (México), S.A., Institución de Banca Múltiple, Grupo Financiero Santander',
            'status'=>1
        ]);
        Bank::create([
            'key' => '019',
            'name' => 'BANJERCITO',
            'business_name' => 'Banco Nacional del Ejército, Fuerza Aérea y Armada, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
            'status'=>1
        ]);
        Bank::create([
            'key' => '021',
            'name' => 'HSBC',
            'business_name' => 'HSBC México, S.A., institución De Banca Múltiple, Grupo Financiero HSBC',
            'status'=>1
        ]);
        Bank::create([
            'key' => '030',
            'name' => 'BAJIO',
            'business_name' => 'Banco del Bajío, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '032',
            'name' => 'IXE',
            'business_name' => 'IXE Banco, S.A., Institución de Banca Múltiple, IXE Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '036',
            'name' => 'INBURSA',
            'business_name' => 'Banco Inbursa, S.A., Institución de Banca Múltiple, Grupo Financiero Inbursa',
            'status'=>1
        ]);
        Bank::create([
            'key' => '037',
            'name' => 'INTERACCIONES',
            'business_name' => 'Banco Interacciones, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '042',
            'name' => 'MIFEL',
            'business_name' => 'Banca Mifel, S.A., Institución de Banca Múltiple, Grupo Financiero Mifel',
            'status'=>1
        ]);
        Bank::create([
            'key' => '044',
            'name' => 'SCOTIABANK',
            'business_name' => 'Scotiabank Inverlat, S.A.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '058',
            'name' => 'BANREGIO',
            'business_name' => 'Banco Regional de Monterrey, S.A., Institución de Banca Múltiple, Banregio Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '059',
            'name' => 'INVEX',
            'business_name' => 'Banco Invex, S.A., Institución de Banca Múltiple, Invex Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '060',
            'name' => 'BANSI',
            'business_name' => 'Bansi, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '062',
            'name' => 'AFIRME',
            'business_name' => 'Banca Afirme, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '072',
            'name' => 'BANORTE',
            'business_name' => 'Banco Mercantil del Norte, S.A., Institución de Banca Múltiple, Grupo Financiero Banorte',
            'status'=>1
        ]);
        Bank::create([
            'key' => '102',
            'name' => 'THE ROYAL BANK',
            'business_name' => 'The Royal Bank of Scotland México, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '103',
            'name' => 'AMERICAN EXPRESS',
            'business_name' => 'American Express Bank (México), S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '106',
            'name' => 'BAMSA',
            'business_name' => 'Bank of America México, S.A., Institución de Banca Múltiple, Grupo Financiero Bank of America',
            'status'=>1
        ]);
        Bank::create([
            'key' => '108',
            'name' => 'TOKYO',
            'business_name' => 'Bank of Tokyo-Mitsubishi UFJ (México), S.A.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '110',
            'name' => 'JP MORGAN',
            'business_name' => 'Banco J.P. Morgan, S.A., Institución de Banca Múltiple, J.P. Morgan Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '112',
            'name' => 'BMONEX',
            'business_name' => 'Banco Monex, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '113',
            'name' => 'VE POR MAS',
            'business_name' => 'Banco Ve Por Mas, S.A. Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '116',
            'name' => 'ING',
            'business_name' => 'ING Bank (México), S.A., Institución de Banca Múltiple, ING Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '124',
            'name' => 'DEUTSCHE',
            'business_name' => 'Deutsche Bank México, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '126',
            'name' => 'CREDIT SUISSE',
            'business_name' => 'Banco Credit Suisse (México), S.A. Institución de Banca Múltiple, Grupo Financiero Credit Suisse (México)',
            'status'=>1
        ]);
        Bank::create([
            'key' => '127',
            'name' => 'AZTECA',
            'business_name' => 'Banco Azteca, S.A. Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '128',
            'name' => 'AUTOFIN',
            'business_name' => 'Banco Autofin México, S.A. Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '129',
            'name' => 'BARCLAYS',
            'business_name' => 'Barclays Bank México, S.A., Institución de Banca Múltiple, Grupo Financiero Barclays México',
            'status'=>1
        ]);
        Bank::create([
            'key' => '130',
            'name' => 'COMPARTAMOS',
            'business_name' => 'Banco Compartamos, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '131',
            'name' => 'BANCO FAMSA',
            'business_name' => 'Banco Ahorro Famsa, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '132',
            'name' => 'BMULTIVA',
            'business_name' => 'Banco Multiva, S.A., Institución de Banca Múltiple, Multivalores Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '133',
            'name' => 'ACTINVER',
            'business_name' => 'Banco Actinver, S.A. Institución de Banca Múltiple, Grupo Financiero Actinver',
            'status'=>1
        ]);
        Bank::create([
            'key' => '134',
            'name' => 'WAL-MART',
            'business_name' => 'Banco Wal-Mart de México Adelante, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '135',
            'name' => 'NAFIN',
            'business_name' => 'Nacional Financiera, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
            'status'=>1
        ]);
        Bank::create([
            'key' => '136',
            'name' => 'INTERBANCO',
            'business_name' => 'Inter Banco, S.A. Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '137',
            'name' => 'BANCOPPEL',
            'business_name' => 'BanCoppel, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '138',
            'name' => 'ABC CAPITAL',
            'business_name' => 'ABC Capital, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '139',
            'name' => 'UBS BANK',
            'business_name' => 'UBS Bank México, S.A., Institución de Banca Múltiple, UBS Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '140',
            'name' => 'CONSUBANCO',
            'business_name' => 'Consubanco, S.A. Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '141',
            'name' => 'VOLKSWAGEN',
            'business_name' => 'Volkswagen Bank, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '143',
            'name' => 'CIBANCO',
            'business_name' => 'CIBanco, S.A.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '145',
            'name' => 'BBASE',
            'business_name' => 'Banco Base, S.A., Institución de Banca Múltiple',
            'status'=>1
        ]);
        Bank::create([
            'key' => '166',
            'name' => 'BANSEFI',
            'business_name' => 'Banco del Ahorro Nacional y Servicios Financieros, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
            'status'=>1
        ]);
        Bank::create([
            'key' => '168',
            'name' => 'HIPOTECARIA FEDERAL',
            'business_name' => 'Sociedad Hipotecaria Federal, Sociedad Nacional de Crédito, Institución de Banca de Desarrollo',
            'status'=>1
        ]);
        Bank::create([
            'key' => '600',
            'name' => 'MONEXCB',
            'business_name' => 'Monex Casa de Bolsa, S.A. de C.V. Monex Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '601',
            'name' => 'GBM',
            'business_name' => 'GBM Grupo Bursátil Mexicano, S.A. de C.V. Casa de Bolsa',
            'status'=>1
        ]);
        Bank::create([
            'key' => '602',
            'name' => 'MASARI',
            'business_name' => 'Masari Casa de Bolsa, S.A.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '605',
            'name' => 'VALUE',
            'business_name' => 'Value, S.A. de C.V. Casa de Bolsa',
            'status'=>1
        ]);
        Bank::create([
            'key' => '606',
            'name' => 'ESTRUCTURADORES',
            'business_name' => 'Estructuradores del Mercado de Valores Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '607',
            'name' => 'TIBER',
            'business_name' => 'Casa de Cambio Tiber, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '608',
            'name' => 'VECTOR',
            'business_name' => 'Vector Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '610',
            'name' => 'B&B',
            'business_name' => 'B y B, Casa de Cambio, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '614',
            'name' => 'ACCIVAL',
            'business_name' => 'Acciones y Valores Banamex, S.A. de C.V., Casa de Bolsa',
            'status'=>1
        ]);
        Bank::create([
            'key' => '615',
            'name' => 'MERRILL LYNCH',
            'business_name' => 'Merrill Lynch México, S.A. de C.V. Casa de Bolsa',
            'status'=>1
        ]);
        Bank::create([
            'key' => '616',
            'name' => 'FINAMEX',
            'business_name' => 'Casa de Bolsa Finamex, S.A. de C.V',
            'status'=>1
        ]);
        Bank::create([
            'key' => '617',
            'name' => 'VALMEX',
            'business_name' => 'Valores Mexicanos Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '618',
            'name' => 'UNICA',
            'business_name' => 'Unica Casa de Cambio, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '619',
            'name' => 'MAPFRE',
            'business_name' => 'MAPFRE Tepeyac, S.A.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '620',
            'name' => 'PROFUTURO',
            'business_name' => 'Profuturo G.N.P., S.A. de C.V., Afore',
            'status'=>1
        ]);
        Bank::create([
            'key' => '621',
            'name' => 'CB ACTINVER',
            'business_name' => 'Actinver Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '622',
            'name' => 'OACTIN',
            'business_name' => 'Actinver Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '623',
            'name' => 'SKANDIA',
            'business_name' => 'Skandia Vida, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '626',
            'name' => 'CBDEUTSCHE',
            'business_name' => 'Deutsche Securities, S.A. de C.V. CASA DE BOLSA',
            'status'=>1
        ]);
        Bank::create([
            'key' => '627',
            'name' => 'ZURICH',
            'business_name' => 'Zurich Compañía de Seguros, S.A',
            'status'=>1
        ]);
        Bank::create([
            'key' => '628',
            'name' => 'ZURICHVI',
            'business_name' => 'Zurich Vida, Compañía de Seguros, S.A.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '629',
            'name' => 'SU CASITA',
            'business_name' => 'Hipotecaria Su Casita, S.A. de C.V. SOFOM ENR',
            'status'=>1
        ]);
        Bank::create([
            'key' => '630',
            'name' => 'CB INTERCAM',
            'business_name' => 'Intercam Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '631',
            'name' => 'CI BOLSA',
            'business_name' => 'CI Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '632',
            'name' => 'BULLTICK CB',
            'business_name' => 'Bulltick Casa de Bolsa, S.A., de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '633',
            'name' => 'STERLING',
            'business_name' => 'Sterling Casa de Cambio, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '634',
            'name' => 'FINCOMUN',
            'business_name' => 'Fincomún, Servicios Financieros Comunitarios, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '636',
            'name' => 'HDI SEGUROS',
            'business_name' => 'HDI Seguros, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '637',
            'name' => 'ORDER',
            'business_name' => 'Order Express Casa de Cambio, S.A. de C.V',
            'status'=>1
        ]);
        Bank::create([
            'key' => '638',
            'name' => 'AKALA',
            'business_name' => 'Akala, S.A. de C.V., Sociedad Financiera Popular',
            'status'=>1
        ]);
        Bank::create([
            'key' => '640',
            'name' => 'CB JPMORGAN',
            'business_name' => 'J.P. Morgan Casa de Bolsa, S.A. de C.V. J.P. Morgan Grupo Financiero',
            'status'=>1
        ]);
        Bank::create([
            'key' => '642',
            'name' => 'REFORMA',
            'business_name' => 'Operadora de Recursos Reforma, S.A. de C.V., S.F.P.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '646',
            'name' => 'STP',
            'business_name' => 'Sistema de Transferencias y Pagos STP, S.A. de C.V.SOFOM ENR',
            'status'=>1
        ]);
        Bank::create([
            'key' => '647',
            'name' => 'TELECOMM',
            'business_name' => 'Telecomunicaciones de México',
            'status'=>1
        ]);
        Bank::create([
            'key' => '648',
            'name' => 'EVERCORE',
            'business_name' => 'Evercore Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '649',
            'name' => 'SKANDIA',
            'business_name' => 'Skandia Operadora de Fondos, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '651',
            'name' => 'SEGMTY',
            'business_name' => 'Seguros Monterrey New York Life, S.A de C.V',
            'status'=>1
        ]);
        Bank::create([
            'key' => '652',
            'name' => 'ASEA',
            'business_name' => 'Solución Asea, S.A. de C.V., Sociedad Financiera Popular',
            'status'=>1
        ]);
        Bank::create([
            'key' => '653',
            'name' => 'KUSPIT',
            'business_name' => 'Kuspit Casa de Bolsa, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '655',
            'name' => 'SOFIEXPRESS',
            'business_name' => 'J.P. SOFIEXPRESS, S.A. de C.V., S.F.P.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '656',
            'name' => 'UNAGRA',
            'business_name' => 'UNAGRA, S.A. de C.V., S.F.P.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '659',
            'name' => 'OPCIONES EMPRESARIALES DEL NOROESTE',
            'business_name' => 'OPCIONES EMPRESARIALES DEL NORESTE, S.A. DE C.V., S.F.P.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '670',
            'name' => 'LIBERTAD',
            'business_name' => 'Libertad Servicios Financieros, S.A. De C.V',
            'status'=>1
        ]);
        Bank::create([
            'key' => '901',
            'name' => 'CLS',
            'business_name' => 'Cls Bank International',
            'status'=>1
        ]);
        Bank::create([
            'key' => '902',
            'name' => 'INDEVAL',
            'business_name' => 'SD. Indeval, S.A. de C.V.',
            'status'=>1
        ]);
        Bank::create([
            'key' => '999',
            'name' => 'N/A',
            'business_name' => 'N/A',
            'status'=>1
        ]);
    }
}
