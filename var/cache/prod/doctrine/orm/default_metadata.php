<?php

// This file has been auto-generated by the Symfony Cache Component.

return [[

'App__Entity__Contrat__CLASSMETADATA__' => 0,
'App__Entity__Payement__CLASSMETADATA__' => 1,
'App__Entity__Client__CLASSMETADATA__' => 2,

], [

0 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Contrat',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Contrat',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ContratRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'surface' => [
                            'fieldName' => 'surface',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'surface',
                        ],
                        'loyer' => [
                            'fieldName' => 'loyer',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'loyer',
                        ],
                        'FrequencePayement' => [
                            'fieldName' => 'FrequencePayement',
                            'type' => 'dateinterval',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'frequence_payement',
                        ],
                        'DernierLoyer' => [
                            'fieldName' => 'DernierLoyer',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'dernier_loyer',
                        ],
                        'ProchaineEcheance' => [
                            'fieldName' => 'ProchaineEcheance',
                            'type' => 'datetime',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'prochaine_echeance',
                        ],
                        'MontantRestant' => [
                            'fieldName' => 'MontantRestant',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'montant_restant',
                        ],
                        'archivé' => [
                            'fieldName' => 'archivé',
                            'type' => 'boolean',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'options' => [
                                'default' => '0',
                            ],
                            'columnName' => 'archivé',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'surface' => 'surface',
                        'loyer' => 'loyer',
                        'frequence_payement' => 'FrequencePayement',
                        'dernier_loyer' => 'DernierLoyer',
                        'prochaine_echeance' => 'ProchaineEcheance',
                        'montant_restant' => 'MontantRestant',
                        'archivé' => 'archivé',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'surface' => 'surface',
                        'loyer' => 'loyer',
                        'FrequencePayement' => 'frequence_payement',
                        'DernierLoyer' => 'dernier_loyer',
                        'ProchaineEcheance' => 'prochaine_echeance',
                        'MontantRestant' => 'montant_restant',
                        'archivé' => 'archivé',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'contrat',
                    ],
                ],
                'associationMappings' => [
                    [
                        'client' => [
                            'fieldName' => 'client',
                            'joinColumns' => [
                                [
                                    'name' => 'client_id',
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => 'contrats',
                            'targetEntity' => 'App\\Entity\\Client',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Contrat',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'client_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'client_id' => 'client_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'client_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
1 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Payement',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Payement',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\PayementRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'SommePayee' => [
                            'fieldName' => 'SommePayee',
                            'type' => 'float',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'somme_payee',
                        ],
                        'date' => [
                            'fieldName' => 'date',
                            'type' => 'date',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'date',
                        ],
                        'MoyenPayement' => [
                            'fieldName' => 'MoyenPayement',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'moyen_payement',
                        ],
                        'TypePayement' => [
                            'fieldName' => 'TypePayement',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'type_payement',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'somme_payee' => 'SommePayee',
                        'date' => 'date',
                        'moyen_payement' => 'MoyenPayement',
                        'type_payement' => 'TypePayement',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'SommePayee' => 'somme_payee',
                        'date' => 'date',
                        'MoyenPayement' => 'moyen_payement',
                        'TypePayement' => 'type_payement',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'payement',
                    ],
                ],
                'associationMappings' => [
                    [
                        'contrat' => [
                            'fieldName' => 'contrat',
                            'joinColumns' => [
                                [
                                    'name' => 'contrat_id',
                                    'unique' => false,
                                    'nullable' => false,
                                    'onDelete' => null,
                                    'columnDefinition' => null,
                                    'referencedColumnName' => 'id',
                                ],
                            ],
                            'cascade' => [],
                            'inversedBy' => null,
                            'targetEntity' => 'App\\Entity\\Contrat',
                            'fetch' => 2,
                            'type' => 2,
                            'mappedBy' => null,
                            'isOwningSide' => true,
                            'sourceEntity' => 'App\\Entity\\Payement',
                            'isCascadeRemove' => false,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                            'sourceToTargetKeyColumns' => [
                                'contrat_id' => 'id',
                            ],
                            'joinColumnFieldNames' => [
                                'contrat_id' => 'contrat_id',
                            ],
                            'targetToSourceKeyColumns' => [
                                'id' => 'contrat_id',
                            ],
                            'orphanRemoval' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},
2 => static function () {
    return \Symfony\Component\VarExporter\Internal\Hydrator::hydrate(
        $o = [
            clone (($p = &\Symfony\Component\VarExporter\Internal\Registry::$prototypes)['Doctrine\\ORM\\Mapping\\ClassMetadata'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Mapping\\ClassMetadata')),
            clone ($p['Doctrine\\ORM\\Id\\IdentityGenerator'] ?? \Symfony\Component\VarExporter\Internal\Registry::p('Doctrine\\ORM\\Id\\IdentityGenerator')),
        ],
        null,
        [
            'stdClass' => [
                'name' => [
                    'App\\Entity\\Client',
                ],
                'namespace' => [
                    'App\\Entity',
                ],
                'rootEntityName' => [
                    'App\\Entity\\Client',
                ],
                'customRepositoryClassName' => [
                    'App\\Repository\\ClientRepository',
                ],
                'identifier' => [
                    [
                        'id',
                    ],
                ],
                'generatorType' => [
                    4,
                ],
                'fieldMappings' => [
                    [
                        'id' => [
                            'fieldName' => 'id',
                            'type' => 'integer',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'id' => true,
                            'columnName' => 'id',
                        ],
                        'nom' => [
                            'fieldName' => 'nom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'nom',
                        ],
                        'prenom' => [
                            'fieldName' => 'prenom',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => false,
                            'precision' => null,
                            'columnName' => 'prenom',
                        ],
                        'email' => [
                            'fieldName' => 'email',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'email',
                        ],
                        'telephone' => [
                            'fieldName' => 'telephone',
                            'type' => 'string',
                            'scale' => null,
                            'length' => null,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'telephone',
                        ],
                        'picAddress' => [
                            'fieldName' => 'picAddress',
                            'type' => 'string',
                            'scale' => null,
                            'length' => 255,
                            'unique' => false,
                            'nullable' => true,
                            'precision' => null,
                            'columnName' => 'pic_address',
                        ],
                    ],
                ],
                'fieldNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'prenom' => 'prenom',
                        'email' => 'email',
                        'telephone' => 'telephone',
                        'pic_address' => 'picAddress',
                    ],
                ],
                'columnNames' => [
                    [
                        'id' => 'id',
                        'nom' => 'nom',
                        'prenom' => 'prenom',
                        'email' => 'email',
                        'telephone' => 'telephone',
                        'picAddress' => 'pic_address',
                    ],
                ],
                'table' => [
                    [
                        'name' => 'client',
                    ],
                ],
                'associationMappings' => [
                    [
                        'contrats' => [
                            'fieldName' => 'contrats',
                            'mappedBy' => 'client',
                            'targetEntity' => 'App\\Entity\\Contrat',
                            'cascade' => [
                                'remove',
                            ],
                            'orphanRemoval' => false,
                            'fetch' => 2,
                            'type' => 4,
                            'inversedBy' => null,
                            'isOwningSide' => false,
                            'sourceEntity' => 'App\\Entity\\Client',
                            'isCascadeRemove' => true,
                            'isCascadePersist' => false,
                            'isCascadeRefresh' => false,
                            'isCascadeMerge' => false,
                            'isCascadeDetach' => false,
                        ],
                    ],
                ],
                'idGenerator' => [
                    $o[1],
                ],
            ],
        ],
        $o[0],
        []
    );
},

]];
