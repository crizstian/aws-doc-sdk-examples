# Aurora code examples for the SDK for Go V2

## Overview

Shows how to use the AWS SDK for Go V2 to work with Amazon Aurora.

<!--custom.overview.start-->
<!--custom.overview.end-->

_Aurora is a fully managed relational database engine that's built for the cloud and compatible with MySQL and PostgreSQL. Amazon Aurora is part of Amazon Relational Database Service (Amazon RDS)._

## ⚠ Important

* Running this code might result in charges to your AWS account. For more details, see [AWS Pricing](https://aws.amazon.com/pricing/) and [Free Tier](https://aws.amazon.com/free/).
* Running the tests might result in charges to your AWS account.
* We recommend that you grant your code least privilege. At most, grant only the minimum permissions required to perform the task. For more information, see [Grant least privilege](https://docs.aws.amazon.com/IAM/latest/UserGuide/best-practices.html#grant-least-privilege).
* This code is not tested in every AWS Region. For more information, see [AWS Regional Services](https://aws.amazon.com/about-aws/global-infrastructure/regional-product-services).

<!--custom.important.start-->
<!--custom.important.end-->

## Code examples

### Prerequisites

For prerequisites, see the [README](../README.md#Prerequisites) in the `gov2` folder.


<!--custom.prerequisites.start-->
<!--custom.prerequisites.end-->

### Get started

- [Hello Aurora](hello/hello.go#L4) (`DescribeDBClusters`)


### Single actions

Code excerpts that show you how to call individual service functions.

- [Create a DB cluster](actions/clusters.go#L158) (`CreateDBCluster`)
- [Create a DB cluster parameter group](actions/clusters.go#L45) (`CreateDBClusterParameterGroup`)
- [Create a DB cluster snapshot](actions/clusters.go#L204) (`CreateDBClusterSnapshot`)
- [Create a DB instance in a DB cluster](actions/clusters.go#L241) (`CreateDBInstance`)
- [Delete a DB cluster](actions/clusters.go#L186) (`DeleteDBCluster`)
- [Delete a DB cluster parameter group](actions/clusters.go#L69) (`DeleteDBClusterParameterGroup`)
- [Delete a DB instance](actions/clusters.go#L288) (`DeleteDBInstance`)
- [Describe DB cluster parameter groups](actions/clusters.go#L21) (`DescribeDBClusterParameterGroups`)
- [Describe DB cluster snapshots](actions/clusters.go#L223) (`DescribeDBClusterSnapshots`)
- [Describe DB clusters](actions/clusters.go#L134) (`DescribeDBClusters`)
- [Describe DB instances](actions/clusters.go#L263) (`DescribeDBInstances`)
- [Describe database engine versions](actions/clusters.go#L307) (`DescribeDBEngineVersions`)
- [Describe options for DB instances](actions/clusters.go#L328) (`DescribeOrderableDBInstanceOptions`)
- [Describe parameters from a DB cluster parameter group](actions/clusters.go#L87) (`DescribeDBClusterParameters`)
- [Update parameters in a DB cluster parameter group](actions/clusters.go#L115) (`ModifyDBClusterParameterGroup`)

### Scenarios

Code examples that show you how to accomplish a specific task by calling multiple
functions within the same service.

- [Get started with DB clusters](scenarios/get_started_clusters.go)


<!--custom.examples.start-->
<!--custom.examples.end-->

## Run the examples

### Instructions


<!--custom.instructions.start-->
<!--custom.instructions.end-->

#### Hello Aurora

This example shows you how to get started using Aurora.

```
go run ./hello
```

#### Run a scenario

All scenarios can be run with the `cmd` runner. To get a list of scenarios
and to get help for running a scenario, use the following command:

```
go run ./cmd -h
```

#### Get started with DB clusters

This example shows you how to do the following:

- Create a custom Aurora DB cluster parameter group and set parameter values.
- Create a DB cluster that uses the parameter group.
- Create a DB instance that contains a database.
- Take a snapshot of the DB cluster, then clean up resources.

<!--custom.scenario_prereqs.aurora_Scenario_GetStartedClusters.start-->
<!--custom.scenario_prereqs.aurora_Scenario_GetStartedClusters.end-->


<!--custom.scenarios.aurora_Scenario_GetStartedClusters.start-->
<!--custom.scenarios.aurora_Scenario_GetStartedClusters.end-->

### Tests

⚠ Running tests might result in charges to your AWS account.


To find instructions for running these tests, see the [README](../README.md#Tests)
in the `gov2` folder.



<!--custom.tests.start-->
<!--custom.tests.end-->

## Additional resources

- [Aurora User Guide](https://docs.aws.amazon.com/AmazonRDS/latest/AuroraUserGuide/CHAP_AuroraOverview.html)
- [Aurora API Reference](https://docs.aws.amazon.com/AmazonRDS/latest/APIReference/Welcome.html)
- [SDK for Go V2 Aurora reference](https://pkg.go.dev/github.com/aws/aws-sdk-go-v2/service/rds)

<!--custom.resources.start-->
<!--custom.resources.end-->

---

Copyright Amazon.com, Inc. or its affiliates. All Rights Reserved.

SPDX-License-Identifier: Apache-2.0