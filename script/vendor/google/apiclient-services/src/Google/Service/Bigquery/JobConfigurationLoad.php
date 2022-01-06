<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Bigquery_JobConfigurationLoad extends Google_Collection
{
  public $allowJaggedRows;
  public $allowQuotedNewlines;
  public $autodetect;
  public $createDisposition;
  public $encoding;
  public $fieldDelimiter;
  public $ignoreUnknownValues;
  public $maxBadRecords;
  public $nullMarker;
  public $projectionFields;
  public $quote;
  public $schemaInline;
  public $schemaInlineFormat;
  public $schemaUpdateOptions;
  public $skipLeadingRows;
  public $sourceFormat;
  public $sourceUris;
  public $useAvroLogicalTypes;
  public $writeDisposition;
  protected $collection_key = 'sourceUris';
  protected $clusteringType = 'Google_Service_Bigquery_Clustering';
  protected $clusteringDataType = '';
  protected $destinationEncryptionConfigurationType = 'Google_Service_Bigquery_EncryptionConfiguration';
  protected $destinationEncryptionConfigurationDataType = '';
  protected $destinationTableType = 'Google_Service_Bigquery_TableReference';
  protected $destinationTableDataType = '';
  protected $destinationTablePropertiesType = 'Google_Service_Bigquery_DestinationTableProperties';
  protected $destinationTablePropertiesDataType = '';
  protected $schemaType = 'Google_Service_Bigquery_TableSchema';
  protected $schemaDataType = '';
  protected $timePartitioningType = 'Google_Service_Bigquery_TimePartitioning';
  protected $timePartitioningDataType = '';

  public function getAllowJaggedRows()
  {
    return $this->allowJaggedRows;
  }

  public function setAllowJaggedRows($allowJaggedRows)
  {
    $this->allowJaggedRows = $allowJaggedRows;
  }

  public function getAllowQuotedNewlines()
  {
    return $this->allowQuotedNewlines;
  }

  public function setAllowQuotedNewlines($allowQuotedNewlines)
  {
    $this->allowQuotedNewlines = $allowQuotedNewlines;
  }

  public function getAutodetect()
  {
    return $this->autodetect;
  }

  public function setAutodetect($autodetect)
  {
    $this->autodetect = $autodetect;
  }

  /**
   * @param Google_Service_Bigquery_Clustering
   */
  public function setClustering(Google_Service_Bigquery_Clustering $clustering)
  {
    $this->clustering = $clustering;
  }
  /**
   * @return Google_Service_Bigquery_Clustering
   */
  public function getClustering()
  {
    return $this->clustering;
  }

  public function getCreateDisposition()
  {
    return $this->createDisposition;
  }

  public function setCreateDisposition($createDisposition)
  {
    $this->createDisposition = $createDisposition;
  }

  /**
   * @param Google_Service_Bigquery_EncryptionConfiguration
   */
  public function setDestinationEncryptionConfiguration(Google_Service_Bigquery_EncryptionConfiguration $destinationEncryptionConfiguration)
  {
    $this->destinationEncryptionConfiguration = $destinationEncryptionConfiguration;
  }
  /**
   * @return Google_Service_Bigquery_EncryptionConfiguration
   */
  public function getDestinationEncryptionConfiguration()
  {
    return $this->destinationEncryptionConfiguration;
  }
  /**
   * @param Google_Service_Bigquery_TableReference
   */
  public function setDestinationTable(Google_Service_Bigquery_TableReference $destinationTable)
  {
    $this->destinationTable = $destinationTable;
  }
  /**
   * @return Google_Service_Bigquery_TableReference
   */
  public function getDestinationTable()
  {
    return $this->destinationTable;
  }
  /**
   * @param Google_Service_Bigquery_DestinationTableProperties
   */
  public function setDestinationTableProperties(Google_Service_Bigquery_DestinationTableProperties $destinationTableProperties)
  {
    $this->destinationTableProperties = $destinationTableProperties;
  }
  /**
   * @return Google_Service_Bigquery_DestinationTableProperties
   */
  public function getDestinationTableProperties()
  {
    return $this->destinationTableProperties;
  }

  public function getEncoding()
  {
    return $this->encoding;
  }

  public function setEncoding($encoding)
  {
    $this->encoding = $encoding;
  }

  public function getFieldDelimiter()
  {
    return $this->fieldDelimiter;
  }

  public function setFieldDelimiter($fieldDelimiter)
  {
    $this->fieldDelimiter = $fieldDelimiter;
  }

  public function getIgnoreUnknownValues()
  {
    return $this->ignoreUnknownValues;
  }

  public function setIgnoreUnknownValues($ignoreUnknownValues)
  {
    $this->ignoreUnknownValues = $ignoreUnknownValues;
  }

  public function getMaxBadRecords()
  {
    return $this->maxBadRecords;
  }

  public function setMaxBadRecords($maxBadRecords)
  {
    $this->maxBadRecords = $maxBadRecords;
  }

  public function getNullMarker()
  {
    return $this->nullMarker;
  }

  public function setNullMarker($nullMarker)
  {
    $this->nullMarker = $nullMarker;
  }

  public function getProjectionFields()
  {
    return $this->projectionFields;
  }

  public function setProjectionFields($projectionFields)
  {
    $this->projectionFields = $projectionFields;
  }

  public function getQuote()
  {
    return $this->quote;
  }

  public function setQuote($quote)
  {
    $this->quote = $quote;
  }

  /**
   * @param Google_Service_Bigquery_TableSchema
   */
  public function setSchema(Google_Service_Bigquery_TableSchema $schema)
  {
    $this->schema = $schema;
  }
  /**
   * @return Google_Service_Bigquery_TableSchema
   */
  public function getSchema()
  {
    return $this->schema;
  }

  public function getSchemaInline()
  {
    return $this->schemaInline;
  }

  public function setSchemaInline($schemaInline)
  {
    $this->schemaInline = $schemaInline;
  }

  public function getSchemaInlineFormat()
  {
    return $this->schemaInlineFormat;
  }

  public function setSchemaInlineFormat($schemaInlineFormat)
  {
    $this->schemaInlineFormat = $schemaInlineFormat;
  }

  public function getSchemaUpdateOptions()
  {
    return $this->schemaUpdateOptions;
  }

  public function setSchemaUpdateOptions($schemaUpdateOptions)
  {
    $this->schemaUpdateOptions = $schemaUpdateOptions;
  }

  public function getSkipLeadingRows()
  {
    return $this->skipLeadingRows;
  }

  public function setSkipLeadingRows($skipLeadingRows)
  {
    $this->skipLeadingRows = $skipLeadingRows;
  }

  public function getSourceFormat()
  {
    return $this->sourceFormat;
  }

  public function setSourceFormat($sourceFormat)
  {
    $this->sourceFormat = $sourceFormat;
  }

  public function getSourceUris()
  {
    return $this->sourceUris;
  }

  public function setSourceUris($sourceUris)
  {
    $this->sourceUris = $sourceUris;
  }

  /**
   * @param Google_Service_Bigquery_TimePartitioning
   */
  public function setTimePartitioning(Google_Service_Bigquery_TimePartitioning $timePartitioning)
  {
    $this->timePartitioning = $timePartitioning;
  }
  /**
   * @return Google_Service_Bigquery_TimePartitioning
   */
  public function getTimePartitioning()
  {
    return $this->timePartitioning;
  }

  public function getUseAvroLogicalTypes()
  {
    return $this->useAvroLogicalTypes;
  }

  public function setUseAvroLogicalTypes($useAvroLogicalTypes)
  {
    $this->useAvroLogicalTypes = $useAvroLogicalTypes;
  }

  public function getWriteDisposition()
  {
    return $this->writeDisposition;
  }

  public function setWriteDisposition($writeDisposition)
  {
    $this->writeDisposition = $writeDisposition;
  }
}
