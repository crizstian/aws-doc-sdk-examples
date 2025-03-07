# DynamoDB code examples for the SDK for JavaScript (v3)

## Overview

Shows how to use the AWS SDK for JavaScript (v3) to work with Amazon DynamoDB.

<!--custom.overview.start-->
<!--custom.overview.end-->

_DynamoDB is a fully managed NoSQL database service that provides fast and predictable performance with seamless scalability._

## ⚠ Important

* Running this code might result in charges to your AWS account. For more details, see [AWS Pricing](https://aws.amazon.com/pricing/) and [Free Tier](https://aws.amazon.com/free/).
* Running the tests might result in charges to your AWS account.
* We recommend that you grant your code least privilege. At most, grant only the minimum permissions required to perform the task. For more information, see [Grant least privilege](https://docs.aws.amazon.com/IAM/latest/UserGuide/best-practices.html#grant-least-privilege).
* This code is not tested in every AWS Region. For more information, see [AWS Regional Services](https://aws.amazon.com/about-aws/global-infrastructure/regional-product-services).

<!--custom.important.start-->
<!--custom.important.end-->

## Code examples

### Prerequisites

For prerequisites, see the [README](../../README.md#Prerequisites) in the `javascriptv3` folder.


<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Get started

- [Hello DynamoDB](hello.js#L8) (`ListTables`)


### Single actions

Code excerpts that show you how to call individual service functions.

- [Create a table](actions/create-table.js#L8) (`CreateTable`)
- [Delete a table](actions/delete-table.js#L8) (`DeleteTable`)
- [Delete an item from a table](actions/document-client/delete.js#L8) (`DeleteItem`)
- [Get a batch of items](actions/document-client/batch-get.js#L8) (`BatchGetItem`)
- [Get an item from a table](actions/document-client/get.js#L8) (`GetItem`)
- [Get information about a table](actions/describe-table.js#L8) (`DescribeTable`)
- [List tables](actions/list-tables.js#L8) (`ListTables`)
- [Put an item in a table](actions/document-client/put.js#L8) (`PutItem`)
- [Query a table](actions/document-client/query.js#L8) (`Query`)
- [Run a PartiQL statement](actions/partiql/partiql-put.js#L8) (`ExecuteStatement`)
- [Run batches of PartiQL statements](actions/partiql/partiql-batch-put.js#L8) (`BatchExecuteStatement`)
- [Scan a table](actions/document-client/scan.js#L8) (`Scan`)
- [Update an item in a table](actions/document-client/update.js#L8) (`UpdateItem`)
- [Write a batch of items](actions/document-client/batch-write.js#L8) (`BatchWriteItem`)

### Scenarios

Code examples that show you how to accomplish a specific task by calling multiple
functions within the same service.

- [Get started with tables, items, and queries](scenarios/basic.js)
- [Query a table by using batches of PartiQL statements](scenarios/partiql-batch.js)
- [Query a table using PartiQL](scenarios/partiql-single.js)

### Cross-service examples

Sample applications that work across multiple AWS services.

- [Use Step Functions to invoke Lambda functions](../../example_code/cross-services/lambda-step-functions)


<!--custom.examples.start-->
<!--custom.examples.end-->

## Run the examples

### Instructions

**Note**: All code examples are written in ECMAscript 6 (ES6). For guidelines on converting to CommonJS, see
[JavaScript ES6/CommonJS syntax](https://docs.aws.amazon.com/sdk-for-javascript/v3/developer-guide/sdk-examples-javascript-syntax.html).

**Run a single action**

```bash
node ./actions/<fileName>
```

**Run a scenario**
Most scenarios can be run with the following command:
```bash
node ./scenarios/<fileName>
```

<!--custom.instructions.start-->
<!--custom.instructions.end-->

#### Hello DynamoDB

This example shows you how to get started using DynamoDB.

```bash
node ./hello.js
```


#### Get started with tables, items, and queries

This example shows you how to do the following:

- Create a table that can hold movie data.
- Put, get, and update a single movie in the table.
- Write movie data to the table from a sample JSON file.
- Query for movies that were released in a given year.
- Scan for movies that were released in a range of years.
- Delete a movie from the table, then delete the table.

<!--custom.scenario_prereqs.dynamodb_Scenario_GettingStartedMovies.start-->
<!--custom.scenario_prereqs.dynamodb_Scenario_GettingStartedMovies.end-->


<!--custom.scenarios.dynamodb_Scenario_GettingStartedMovies.start-->
<!--custom.scenarios.dynamodb_Scenario_GettingStartedMovies.end-->

#### Query a table by using batches of PartiQL statements

This example shows you how to do the following:

- Get a batch of items by running multiple SELECT statements.
- Add a batch of items by running multiple INSERT statements.
- Update a batch of items by running multiple UPDATE statements.
- Delete a batch of items by running multiple DELETE statements.

<!--custom.scenario_prereqs.dynamodb_Scenario_PartiQLBatch.start-->
<!--custom.scenario_prereqs.dynamodb_Scenario_PartiQLBatch.end-->


<!--custom.scenarios.dynamodb_Scenario_PartiQLBatch.start-->
<!--custom.scenarios.dynamodb_Scenario_PartiQLBatch.end-->

#### Query a table using PartiQL

This example shows you how to do the following:

- Get an item by running a SELECT statement.
- Add an item by running an INSERT statement.
- Update an item by running an UPDATE statement.
- Delete an item by running a DELETE statement.

<!--custom.scenario_prereqs.dynamodb_Scenario_PartiQLSingle.start-->
<!--custom.scenario_prereqs.dynamodb_Scenario_PartiQLSingle.end-->


<!--custom.scenarios.dynamodb_Scenario_PartiQLSingle.start-->
<!--custom.scenarios.dynamodb_Scenario_PartiQLSingle.end-->

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../../README.md#Tests)
in the `javascriptv3` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

- [DynamoDB Developer Guide](https://docs.aws.amazon.com/amazondynamodb/latest/developerguide/Introduction.html)
- [DynamoDB API Reference](https://docs.aws.amazon.com/amazondynamodb/latest/APIReference/Welcome.html)
- [SDK for JavaScript (v3) DynamoDB reference](https://docs.aws.amazon.com/AWSJavaScriptSDK/v3/latest/client/dynamodb)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0