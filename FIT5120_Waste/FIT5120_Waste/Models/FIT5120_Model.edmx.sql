
-- --------------------------------------------------
-- Entity Designer DDL Script for SQL Server 2005, 2008, 2012 and Azure
-- --------------------------------------------------
-- Date Created: 03/08/2022 13:25:49
-- Generated from EDMX file: D:\MONASH\5120\FIT5120_Waste\FIT5120_Waste\Models\FIT5120_Model.edmx
-- --------------------------------------------------

SET QUOTED_IDENTIFIER OFF;
GO
USE [FIT5120_DB];
GO
IF SCHEMA_ID(N'dbo') IS NULL EXECUTE(N'CREATE SCHEMA [dbo]');
GO

-- --------------------------------------------------
-- Dropping existing FOREIGN KEY constraints
-- --------------------------------------------------


-- --------------------------------------------------
-- Dropping existing tables
-- --------------------------------------------------


-- --------------------------------------------------
-- Creating all tables
-- --------------------------------------------------

-- Creating table 'WasteSet'
CREATE TABLE [dbo].[WasteSet] (
    [wasteId] int IDENTITY(1,1) NOT NULL,
    [wasteName] nvarchar(max)  NOT NULL,
    [WasteKind_wasteKindId] int  NOT NULL
);
GO

-- Creating table 'WasteKindSet'
CREATE TABLE [dbo].[WasteKindSet] (
    [wasteKindId] int IDENTITY(1,1) NOT NULL,
    [wasteKindName] nvarchar(max)  NOT NULL
);
GO

-- Creating table 'ArticleSet'
CREATE TABLE [dbo].[ArticleSet] (
    [articleId] int IDENTITY(1,1) NOT NULL,
    [articleName] nvarchar(max)  NOT NULL,
    [Waste_wasteId] int  NOT NULL
);
GO

-- --------------------------------------------------
-- Creating all PRIMARY KEY constraints
-- --------------------------------------------------

-- Creating primary key on [wasteId] in table 'WasteSet'
ALTER TABLE [dbo].[WasteSet]
ADD CONSTRAINT [PK_WasteSet]
    PRIMARY KEY CLUSTERED ([wasteId] ASC);
GO

-- Creating primary key on [wasteKindId] in table 'WasteKindSet'
ALTER TABLE [dbo].[WasteKindSet]
ADD CONSTRAINT [PK_WasteKindSet]
    PRIMARY KEY CLUSTERED ([wasteKindId] ASC);
GO

-- Creating primary key on [articleId] in table 'ArticleSet'
ALTER TABLE [dbo].[ArticleSet]
ADD CONSTRAINT [PK_ArticleSet]
    PRIMARY KEY CLUSTERED ([articleId] ASC);
GO

-- --------------------------------------------------
-- Creating all FOREIGN KEY constraints
-- --------------------------------------------------

-- Creating foreign key on [Waste_wasteId] in table 'ArticleSet'
ALTER TABLE [dbo].[ArticleSet]
ADD CONSTRAINT [FK_ArticleWaste]
    FOREIGN KEY ([Waste_wasteId])
    REFERENCES [dbo].[WasteSet]
        ([wasteId])
    ON DELETE NO ACTION ON UPDATE NO ACTION;
GO

-- Creating non-clustered index for FOREIGN KEY 'FK_ArticleWaste'
CREATE INDEX [IX_FK_ArticleWaste]
ON [dbo].[ArticleSet]
    ([Waste_wasteId]);
GO

-- Creating foreign key on [WasteKind_wasteKindId] in table 'WasteSet'
ALTER TABLE [dbo].[WasteSet]
ADD CONSTRAINT [FK_WasteWasteKind]
    FOREIGN KEY ([WasteKind_wasteKindId])
    REFERENCES [dbo].[WasteKindSet]
        ([wasteKindId])
    ON DELETE NO ACTION ON UPDATE NO ACTION;
GO

-- Creating non-clustered index for FOREIGN KEY 'FK_WasteWasteKind'
CREATE INDEX [IX_FK_WasteWasteKind]
ON [dbo].[WasteSet]
    ([WasteKind_wasteKindId]);
GO

-- --------------------------------------------------
-- Script has ended
-- --------------------------------------------------